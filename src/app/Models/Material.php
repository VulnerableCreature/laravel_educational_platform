<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $file_path
 */

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $fillable = [
        'id',
        'course_id',
        'title',
        'description',
        'file_path'
    ];
}
