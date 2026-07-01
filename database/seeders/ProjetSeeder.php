<?php

namespace Database\Seeders;

use App\Models\Projet;
use App\Models\Technologie;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    public function run(): void
    {
        $projets = [
            [
                'titre' => 'EduConnect AI Sahel',
                'slug' => 'educonnect-ai-sahel',
                'description_courte' => 'Plateforme éducative intégrant l\'IA pour l\'apprentissage et la gestion scolaire.',
                'description_complete' => 'EduConnect AI Sahel est une plateforme éducative innovante qui utilise l\'intelligence artificielle pour personnaliser l\'apprentissage des élèves. La plateforme permet aux enseignants de créer des cours interactifs, de suivre les progrès des élèves et de générer des rapports détaillés. L\'IA analyse les performances des élèves et suggère des exercices adaptés à leurs besoins.',
                'categorie' => 'Education',
                'image' => 'educonnect.jpg',
                'lien_demo' => 'https://educonnect-sahel.com',
                'lien_code' => 'https://github.com/Amadoutang79/educonnect',
                'est_en_avant' => true,
                'ordre' => 1,
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Bootstrap']
            ],
            [
                'titre' => 'POS App',
                'slug' => 'pos-app',
                'description_courte' => 'Système de point de vente avec gestion des stocks, ventes et clients.',
                'description_complete' => 'POS App est une solution complète de gestion de point de vente pour les commerces de détail. L\'application permet de gérer les stocks, les ventes, les clients et les employés. Elle inclut des fonctionnalités de génération de rapports, de gestion des promotions et de suivi des performances. L\'interface est intuitive et optimisée pour une utilisation rapide.',
                'categorie' => 'Gestion commerciale',
                'image' => 'pos-app.jpg',
                'lien_demo' => 'https://pos-app.com',
                'lien_code' => 'https://github.com/Amadoutang79/pos-app',
                'est_en_avant' => true,
                'ordre' => 2,
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript']
            ],
            [
                'titre' => 'Clinique Management',
                'slug' => 'clinique-management',
                'description_courte' => 'Gestion de clinique : patients, rendez-vous, dossiers médicaux et facturation.',
                'description_complete' => 'Clinique Management est un système de gestion complet pour les cliniques et cabinets médicaux. Il permet de gérer les patients, les rendez-vous, les dossiers médicaux électroniques, la facturation et les rapports. Le système est conforme aux normes de sécurité et de confidentialité des données médicales.',
                'categorie' => 'Santé',
                'image' => 'clinique.jpg',
                'lien_demo' => 'https://clinique-management.com',
                'lien_code' => 'https://github.com/Amadoutang79/clinique',
                'est_en_avant' => false,
                'ordre' => 3,
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript']
            ],
            [
                'titre' => 'Système Scolaire',
                'slug' => 'systeme-scolaire',
                'description_courte' => 'Gestion des élèves, notes, présences et tableaux de bord pour écoles.',
                'description_complete' => 'Le Système Scolaire est une plateforme de gestion éducative qui permet aux établissements scolaires de gérer les élèves, les notes, les présences et les emplois du temps. Les enseignants peuvent saisir les notes et les présences, les parents peuvent suivre les performances de leurs enfants, et les administrateurs ont une vue d\'ensemble de l\'établissement.',
                'categorie' => 'Education',
                'image' => 'ecole.jpg',
                'lien_demo' => 'https://systeme-scolaire.com',
                'lien_code' => 'https://github.com/Amadoutang79/ecole',
                'est_en_avant' => false,
                'ordre' => 4,
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript']
            ],
            [
                'titre' => 'SiteShop',
                'slug' => 'siteshop',
                'description_courte' => 'Plateforme e-commerce avec catalogue produits et gestion des commandes.',
                'description_complete' => 'SiteShop est une solution e-commerce complète qui permet aux entreprises de vendre leurs produits en ligne. La plateforme inclut un catalogue de produits, un panier d\'achat, un système de paiement sécurisé, la gestion des commandes et des expéditions. L\'interface est responsive et optimisée pour les mobiles.',
                'categorie' => 'E-commerce',
                'image' => 'siteshop.jpg',
                'lien_demo' => 'https://siteshop.com',
                'lien_code' => 'https://github.com/Amadoutang79/siteshop',
                'est_en_avant' => false,
                'ordre' => 5,
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript']
            ]
        ];

        foreach ($projets as $projetData) {
            $technologies = $projetData['technologies'];
            unset($projetData['technologies']);
            
            $projet = Projet::create($projetData);
            
            $techIds = Technologie::whereIn('nom', $technologies)->pluck('id');
            $projet->technologies()->attach($techIds);
        }
    }
}