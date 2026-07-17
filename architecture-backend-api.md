# Architecture Backend (API only) — Projet "Taille De Rêve"

## 1. Stack Technique

| Composant | Choix |
|---|---|
| Framework | Laravel 11.x (API only) |
| Langage | PHP 8.2+ |
| Base de données | MySQL / MariaDB |
| ORM | Eloquent |
| Format de réponse | JSON (API Resources) |
| Auth Admin | Laravel Sanctum (token) |
| Auth Client | Laravel Socialite (Google) en mode stateless + Sanctum |
| Frontend | Découplé (SPA / mobile) consommant l'API |

---

## 2. Arborescence du Projet

```
taille-de-reve-api/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── Admin/
│   │   │   │   │   ├── ProduitController.php
│   │   │   │   │   ├── CategorieController.php
│   │   │   │   │   ├── CommandeController.php
│   │   │   │   │   ├── ClientController.php
│   │   │   │   │   ├── StatistiqueController.php
│   │   │   │   │   └── ConfigurationController.php
│   │   │   │   ├── Public/
│   │   │   │   │   ├── ProduitController.php
│   │   │   │   │   ├── CategorieController.php
│   │   │   │   │   ├── TemoignageController.php
│   │   │   │   │   ├── FaqController.php
│   │   │   │   │   └── ContactController.php
│   │   │   │   └── Auth/
│   │   │   │       ├── GoogleAuthController.php
│   │   │   │       └── AdminAuthController.php
│   │   ├── Resources/
│   │   │   ├── ProduitResource.php
│   │   │   ├── CategorieResource.php
│   │   │   ├── CommandeResource.php
│   │   │   ├── ClientResource.php
│   │   │   └── TemoignageResource.php
│   │   └── Middleware/
│   │       └── AdminMiddleware.php
│   ├── Models/
│   │   ├── Produit.php
│   │   ├── Categorie.php
│   │   ├── Commande.php
│   │   ├── LigneCommande.php
│   │   ├── Client.php
│   │   ├── Temoignage.php
│   │   └── Configuration.php
│   └── Services/
│       ├── WhatsAppService.php
│       └── FraisLivraisonService.php
│
├── database/
│   ├── migrations/
│   │   ├── create_categories_table.php
│   │   ├── create_produits_table.php
│   │   ├── create_clients_table.php
│   │   ├── create_commandes_table.php
│   │   ├── create_lignes_commande_table.php
│   │   ├── create_temoignages_table.php
│   │   └── create_configurations_table.php
│   └── seeders/
│       ├── CategorieSeeder.php
│       └── ProduitSeeder.php
│
├── routes/
│   └── api.php          → toutes les routes (public, admin, auth)
│
└── config/
    ├── sanctum.php
    └── services.php      → clés Google Socialite
```

> Pas de dossier `resources/views` ni de `layouts` : l'API ne rend aucune page HTML. Le frontend (SPA, app mobile) consomme les endpoints JSON.

---

## 3. Modèles de Données (Eloquent)

Identique à la version précédente — inchangée, car indépendante du mode de rendu.

```
Categorie (1) ──< (N) Produit
Client (1) ──< (N) Commande
Commande (1) ──< (N) LigneCommande
Produit (1) ──< (N) LigneCommande
```

**Tables** : categories, produits, clients, commandes, lignes_commande, temoignages, configurations (structure identique au document précédent).

---

## 4. Endpoints Principaux

### Public
```
GET  /api/produits
GET  /api/produits/{slug}
GET  /api/categories
GET  /api/temoignages
GET  /api/faq
POST /api/contact
POST /api/commandes            → créer une commande + retourner lien wa.me
```

### Auth Client (Google)
```
GET  /api/auth/google/redirect  → retourne l'URL OAuth Google
GET  /api/auth/google/callback  → échange code, crée/loggue le client, retourne token Sanctum
```

### Admin (protégé par Sanctum + AdminMiddleware)
```
POST   /api/admin/login
GET    /api/admin/produits
POST   /api/admin/produits
PUT    /api/admin/produits/{id}
DELETE /api/admin/produits/{id}
GET    /api/admin/categories ... (CRUD identique)
GET    /api/admin/commandes
PUT    /api/admin/commandes/{id}/statut
GET    /api/admin/statistiques
GET    /api/admin/configuration
PUT    /api/admin/configuration
```

Toutes les réponses passent par des **API Resources** (`ProduitResource`, etc.) pour normaliser le JSON.

---

## 5. Flux Fonctionnels Clés

### A. Flux Commande → WhatsApp
```
1. Client envoie POST /api/commandes (panier en JSON)
2. Commande créée (statut: en_attente)
3. API génère le message pré-rempli et renvoie l'URL wa.me/{numero}?text=...
4. Le frontend redirige l'utilisateur vers cette URL
5. Admin confirme la commande via PUT /api/admin/commandes/{id}/statut
```

### B. Flux Google Sign-In (API)
```
1. Frontend appelle GET /api/auth/google/redirect
2. Utilisateur passe par Google OAuth côté frontend
3. Frontend envoie le code à /api/auth/google/callback
4. API crée/récupère le Client via google_id, retourne un token Sanctum
5. Le frontend stocke le token et l'envoie en Bearer sur les requêtes suivantes
```

### C. Flux Admin CRUD
```
Toutes les routes /api/admin/* protégées par Sanctum + AdminMiddleware
→ vérifie le token puis le rôle admin avant d'exécuter le Controller
```

---

## 6. Sécurité

- Requêtes DB via Eloquent (protection injection SQL native)
- Auth par token Sanctum (pas de session/cookie CSRF nécessaire pour une API pure)
- Validation via Form Requests Laravel
- Hash bcrypt pour les mots de passe admin
- Clés sensibles (.env), jamais commitées
- Rate limiting sur les routes sensibles (login, contact) via `throttle` middleware
- CORS configuré (`config/cors.php`) pour n'autoriser que le(s) domaine(s) frontend

---

## 7. Prochaines Étapes (Phase 1)

1. `composer create-project laravel/laravel taille-de-reve-api`
2. `php artisan install:api` (installe Sanctum et `routes/api.php`)
3. Configuration `.env` (DB, mail, Google OAuth, CORS)
4. Créer les migrations dans l'ordre : categories → produits → clients → commandes → lignes_commande
5. `php artisan migrate`
6. Créer les Models + relations Eloquent
7. Créer les API Resources
8. Construire les Controllers Api/Admin et Api/Public (retour JSON uniquement)
