# 👗 Taille de Rêve — E-Commerce Platform

> Une plateforme e-commerce moderne et performante conçue pour **Taille de Rêve**, s'appuyant sur une architecture moderne et découplée : un **Backend API** propulsé par Laravel et un **Frontend dynamique** en React.

---

## 🛠️ Stack Technique

Le projet utilise les dernières technologies pour garantir des performances optimales et une expérience utilisateur fluide :

*   **Backend** : PHP 8.3+, [Laravel 13](https://laravel.com) (Mode API & Jobs Asynchrones)
*   **Base de données** : SQLite (par défaut pour le développement) ou MySQL/PostgreSQL
*   **Styling & Assets** : [Tailwind CSS v4](https://tailwindcss.com), [Vite 8](https://vite.dev)
*   **Outils de qualité** : [Laravel Pint](https://laravel.com/docs/pint) (Linter PHP), PHPUnit 12

---

## 📁 Structure du Projet

Le dépôt est organisé de manière découplée pour séparer clairement les responsabilités :

```text
TailleDeReve-E-commerce/
├── TailleDeReveBackend/       # Application Backend API (Laravel 13)
│   ├── app/                   # Logique métier, Modèles & Contrôleurs
│   ├── config/                # Fichiers de configuration de l'application
│   ├── database/              # Migrations, Factories & Seeders
│   ├── routes/                # Définitions des routes (web, console, api)
│   └── composer.json          # Dépendances et scripts d'automatisation
└── README.md                  # Ce guide de documentation globale
```

---

## 🚀 Installation & Démarrage rapide

Suivez ces étapes pour configurer et lancer l'environnement de développement local.

### Prérequis

Assurez-vous d'avoir installé sur votre machine :
*   **PHP 8.3** ou version supérieure
*   **Composer** (gestionnaire de dépendances PHP)
*   **Node.js** (LTS recommandé) & **npm**

---

### 1. Configuration du Backend

Toutes les commandes doivent être exécutées depuis le répertoire du backend :

```bash
cd TailleDeReveBackend
```

#### Étape automatisée (Recommandée)
Nous avons configuré un script d'installation automatique qui gère l'installation des dépendances, la création du fichier d'environnement, la génération de la clé d'application, la base de données et le build initial des assets :

```bash
composer setup
```

*Ce script effectue les actions suivantes :*
1. `composer install` — Installe les dépendances PHP.
2. Copie `.env.example` vers `.env` (si le fichier n'existe pas).
3. `php artisan key:generate` — Génère la clé de sécurité de l'application.
4. `php artisan migrate --force` — Crée la base de données SQLite par défaut (`database.sqlite`) et applique les migrations.
5. `npm install` — Installe les dépendances Node.js.
6. `npm run build` — Compile les assets frontend/CSS Tailwind avec Vite.

---

### 2. Lancement du Serveur de Développement

Pour démarrer simultanément le serveur Web Laravel, le traitement des files d'attente (Queues) en arrière-plan et le serveur de rechargement à chaud Vite, lancez la commande suivante :

```bash
composer dev
```

*Cette commande lance de façon concurrente :*
*   **Server** : Le serveur local PHP (`php artisan serve` sur `http://127.0.0.1:8000`)
*   **Queue** : Le worker de traitement des jobs asynchrones (`php artisan queue:listen`)
*   **Logs** : Le lecteur de logs en temps réel (`php artisan pail`)
*   **Vite** : Le serveur de développement d'assets (`npm run dev`)

---

## 🧪 Tests & Qualité du Code

Pour maintenir la qualité et la robustesse de l'application, vous disposez des outils suivants :

### Lancer la suite de tests
```bash
composer test
```
*(Exécute PHPUnit pour valider l'intégrité de l'application).*

### Formater le code (Standard de style)
```bash
vendor/bin/pint
```
*(Utilise Laravel Pint pour formater automatiquement le code PHP selon les standards PSR-12/Laravel).*

---

## 📄 Licence

Ce projet est sous licence **MIT**. Voir le fichier [composer.json](file:///c:/laragon/www/laravel/TailleDeReve-E-commerce/TailleDeReveBackend/composer.json) pour plus de détails.
