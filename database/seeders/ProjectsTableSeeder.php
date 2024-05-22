<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Progetto 1',
            'description' => 'Descrizione del Progetto 1',
            'user_id' => 1, // Assumendo che l'utente con ID 1 esista
        ]);

        // Aggiungi altri progetti se necessario
    }
}
