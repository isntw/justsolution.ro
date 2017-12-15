<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Project::create([
            'title' => 'Exceedbuy',
            'description' => '',
            'category' => 'Site de Prezentare',
            'link' => null,
            'image' => 'public/resources/img/projects/project1.jpg',
        ]);
        Project::create([
            'title' => 'Gestiune-Transport',
            'description' => '',
            'category' => 'Platforma de Administrare',
            'link' => null,
            'image' => 'public/resources/img/projects/project2.jpg',
        ]);
    }

}
