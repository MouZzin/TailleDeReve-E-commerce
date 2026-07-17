<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class GenerateArchitecture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-architecture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Génère l\'ensemble de l\'arborescence et des fichiers de l\'architecture backend API de Taille de Rêve';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 Début de la génération de l\'architecture...');

        // 1. Génération des Modèles et Migrations
        $models = [
            'Categorie',
            'Produit',
            'Client',
            'Commande',
            'LigneCommande',
            'Temoignage',
            'Configuration'
        ];

        foreach ($models as $model) {
            $this->info("📦 Génération du modèle et de la migration : {$model}");
            Artisan::call('make:model', [
                'name' => $model,
                '-m' => true
            ]);
        }

        // 2. Génération des Contrôleurs API (découplés Admin / Public / Auth)
        $controllers = [
            // Admin
            'Api/Admin/ProduitController',
            'Api/Admin/CategorieController',
            'Api/Admin/CommandeController',
            'Api/Admin/ClientController',
            'Api/Admin/StatistiqueController',
            'Api/Admin/ConfigurationController',

            // Public
            'Api/Public/ProduitController',
            'Api/Public/CategorieController',
            'Api/Public/TemoignageController',
            'Api/Public/FaqController',
            'Api/Public/ContactController',

            // Auth
            'Api/Auth/GoogleAuthController',
            'Api/Auth/AdminAuthController',
        ];

        foreach ($controllers as $controller) {
            $this->info("🕹️ Génération du contrôleur : {$controller}");
            Artisan::call('make:controller', [
                'name' => $controller,
                '--api' => true
            ]);
        }

        // 3. Génération des API Resources
        $resources = [
            'ProduitResource',
            'CategorieResource',
            'CommandeResource',
            'ClientResource',
            'TemoignageResource',
        ];

        foreach ($resources as $resource) {
            $this->info("💎 Génération de l'API Resource : {$resource}");
            Artisan::call('make:resource', [
                'name' => $resource
            ]);
        }

        // 4. Génération des Middlewares
        $middlewares = [
            'AdminMiddleware',
        ];

        foreach ($middlewares as $middleware) {
            $this->info("🛡️ Génération du middleware : {$middleware}");
            Artisan::call('make:middleware', [
                'name' => $middleware
            ]);
        }

        // 5. Génération des Seeders
        $seeders = [
            'CategorieSeeder',
            'ProduitSeeder',
        ];

        foreach ($seeders as $seeder) {
            $this->info("🌱 Génération du seeder : {$seeder}");
            Artisan::call('make:seeder', [
                'name' => $seeder
            ]);
        }

        // 6. Génération des Services Métier (WhatsApp & FraisLivraison)
        $this->info("⚙️ Configuration des services personnalisés...");
        $servicesPath = app_path('Services');
        if (!File::isDirectory($servicesPath)) {
            File::makeDirectory($servicesPath, 0755, true);
        }

        $services = [
            'WhatsAppService' => <<<'PHP'
<?php

namespace App\Services;

class WhatsAppService
{
    /**
     * Générer le lien de message WhatsApp pour une commande.
     */
    public function generateWhatsAppLink(array $commandeData): string
    {
        // TODO: Implémenter la logique de génération du lien wa.me
        return '';
    }
}
PHP
            ,
            'FraisLivraisonService' => <<<'PHP'
<?php

namespace App\Services;

class FraisLivraisonService
{
    /**
     * Calculer les frais de livraison pour une commande.
     */
    public function calculerFrais(array $commandeData): float
    {
        // TODO: Implémenter le calcul des frais de livraison
        return 0.0;
    }
}
PHP
        ];

        foreach ($services as $name => $content) {
            $filePath = "{$servicesPath}/{$name}.php";
            if (!File::exists($filePath)) {
                $this->info("📁 Création du fichier de service : {$name}.php");
                File::put($filePath, $content);
            } else {
                $this->warn("⚠️ Le service {$name}.php existe déjà, ignoré.");
            }
        }

        $this->info('🎉 Architecture générée avec succès !');
        return Command::SUCCESS;
    }
}
