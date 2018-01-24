<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'CV à la manière de…',
            'description' => 'Creation d\'un CV en ligne sur base d\'un site web connu'
        ]);
        Project::create([
            'name' => 'CSS Zen Garden',
            'description' => 'Création d\'un template css pour le site CSS Zen Garden'
        ]);
        Project::create([
            'name' => 'Exposition d’un artiste',
            'description' => 'Site de l\'exposition Nicolas de Staël, ou bien d\'un artiste quelconque au choix'
        ]);
        Project::create([
            'name' => 'Portfolio',
        ]);
        Project::create([
            'name' => 'Mariam Faso',
        ]);
        Project::create([
            'name' => 'Design Mobile Quick',
        ]);
        Project::create([
            'name' => 'Centre de santé d’Angleur',
        ]);
        Project::create([
            'name' => 'Espace P',
        ]);
        Project::create([
            'name' => 'Pré-production du PFE',
        ]);
        Project::create([
            'name' => 'Jiri',
        ]);
    }
}
