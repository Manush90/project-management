<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Attività 1',
            'description' => 'Descrizione dell\'Attività 1',
            'project_id' => 1, // Assumendo che il progetto con ID 1 esista
        ]);

        // Aggiungi altre attività se necessario
    }
}
