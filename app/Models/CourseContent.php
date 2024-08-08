<?php
// app/Models/CourseContent.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 'type', 'content_url', 'title'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
};
