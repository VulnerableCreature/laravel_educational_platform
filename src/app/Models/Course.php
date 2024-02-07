<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'created_at',
        'updated_at',
    ];

    public function getFirstLetterAttribute(): string
    {
        $title = explode(" ", "{$this->title}");
        $letter = "";

        foreach ($title as $letters) {
            $letter .= mb_substr($letters, 0, 1);
        }

        return Str::take($this->title, 2);
    }

    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_teacher', 'user_id');
    }
}
