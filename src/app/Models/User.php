<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Service\Notifier\EmailService;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'surname',
        'name',
        'middleName',
        'login',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::created(function ($user) {
            EmailService::dispatch($user)->delay(now()->addHours(2));
        });
    }

    public function getFullNameAttribute(): string
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->middleName;
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_user')->withTimestamps();
    }

    public function course_teacher(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_teacher')->withTimestamps();
    }
}
