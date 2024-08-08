<?php
// database/migrations/xxxx_xx_xx_create_course_progresses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProgressesTable extends Migration
{
    public function up()
    {
        Schema::create('course_progresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained('enrollments');
            $table->foreignId('content_id')->constrained('course_contents');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_progresses');
    }
};
