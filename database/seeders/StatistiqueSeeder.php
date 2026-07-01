<?php

namespace Database\Seeders;

use App\Models\Statistique;
use Illuminate\Database\Seeder;

class StatistiqueSeeder extends Seeder
{
    public function run(): void
    {
        $statistiques = [
            ['titre' => 'Années d\'expérience', 'valeur' => '4+', 'icone' => 'fas fa-calendar-alt', 'ordre' => 1],
            ['titre' => 'Projets réalisés', 'valeur' => '12+', 'icone' => 'fas fa-project-diagram', 'ordre' => 2],
            ['titre' => 'Applications complètes', 'valeur' => '8+', 'icone' => 'fas fa-check-circle', 'ordre' => 3],
            ['titre' => 'Engagement', 'valeur' => '100%', 'icone' => 'fas fa-heart', 'ordre' => 4],
        ];

        foreach ($statistiques as $stat) {
            Statistique::create($stat);
        }
    }
}