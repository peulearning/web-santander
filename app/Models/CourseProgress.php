<?php
// app/Models/CourseProgress.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_id', 'content_id', 'completed'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function content()
    {
        return $this->belongsTo(CourseContent::class);
    }
};
