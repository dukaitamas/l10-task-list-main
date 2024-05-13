<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create(); //10 fake users added to the database
        \App\Models\User::factory(2)->unverified()->create();  //2 fake users added to the database C:\Users\tomi2\l10-task-list\database\factories\UserFactory.php  public function unverified(): static
         \App\Models\Task::factory(20)->create(); // 20 fake tasks added to the database C:\Users\tomi2\l10-task-list\database\factories\TaskFactory.php

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
