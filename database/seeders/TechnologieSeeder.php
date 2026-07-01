<?php

namespace Database\Seeders;

use App\Models\Technologie;
use Illuminate\Database\Seeder;

class TechnologieSeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            ['nom' => 'Laravel', 'icone' => 'fab fa-laravel', 'couleur' => '#FF2D20', 'niveau' => 90],
            ['nom' => 'PHP', 'icone' => 'fab fa-php', 'couleur' => '#777BB4', 'niveau' => 85],
            ['nom' => 'MySQL', 'icone' => 'fas fa-database', 'couleur' => '#4479A1', 'niveau' => 80],
            ['nom' => 'JavaScript', 'icone' => 'fab fa-js', 'couleur' => '#F7DF1E', 'niveau' => 75],
            ['nom' => 'HTML5', 'icone' => 'fab fa-html5', 'couleur' => '#E34F26', 'niveau' => 90],
            ['nom' => 'CSS3', 'icone' => 'fab fa-css3-alt', 'couleur' => '#1572B6', 'niveau' => 85],
            ['nom' => 'Bootstrap', 'icone' => 'fab fa-bootstrap', 'couleur' => '#7952B3', 'niveau' => 80],
            ['nom' => 'Git', 'icone' => 'fab fa-git-alt', 'couleur' => '#F05032', 'niveau' => 75],
            ['nom' => 'React', 'icone' => 'fab fa-react', 'couleur' => '#61DAFB', 'niveau' => 60],
            ['nom' => 'Node.js', 'icone' => 'fab fa-node-js', 'couleur' => '#339933', 'niveau' => 55],
            ['nom' => 'Docker', 'icone' => 'fab fa-docker', 'couleur' => '#2496ED', 'niveau' => 50],
            ['nom' => 'Redis', 'icone' => 'fas fa-server', 'couleur' => '#DC382D', 'niveau' => 45],
        ];

        foreach ($technologies as $tech) {
            Technologie::create($tech);
        }
    }
}