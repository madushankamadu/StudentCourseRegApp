<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    protected $table = 'student_courses';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'course_id'];
}