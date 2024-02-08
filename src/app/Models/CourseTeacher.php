<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CourseTeacher extends Model
{
    use HasFactory;

    protected $table = 'course_teacher';

    protected $fillable = [
        'id',
        'user_id',
        'course_id',
        'created_at',
        'updated_at',
    ];
}
