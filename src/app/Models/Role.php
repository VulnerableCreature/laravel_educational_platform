<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property int    $role_id
 */
class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'id',
        'title',
        'created_at',
        'updated_at',
    ];
}
