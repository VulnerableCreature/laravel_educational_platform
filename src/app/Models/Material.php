<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $fillable = [
        'id',
        'course_id',
        'title',
        'description',
        'isVisible',
        'file_path'
    ];

    public static function visible(): array
    {
        return [
            1 => 'Показать',
            0 => 'Скрыть',
        ];
    }
}
