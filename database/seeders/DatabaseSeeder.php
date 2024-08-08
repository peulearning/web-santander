<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Notification;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Cria 10 usuários fictícios
        User::factory(10)->create();

        // Cria 5 cursos fictícios
        Course::factory(5)->create();

        // Cria 15 matrículas fictícias
        Enrollment::factory(15)->create();

        // Cria 10 pagamentos fictícios
        Payment::factory(10)->create();

        // Cria 20 notificações fictícias
        Notification::factory(20)->create();

        // Cria 15 feedbacks fictícios
        Feedback::factory(15)->create();
    }
};
