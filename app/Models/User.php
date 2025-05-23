<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_name',
        'user_type',
        'is_admin',
        'user_status',
        'phone',
        'branch_id',
        'gender',
        'birth_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    public function created_posts()
    {
        return $this->hasMany(Post::class, 'post_created_user_id');
    }
    public function created_events()
    {
        return $this->hasMany(Event::class, 'event_created_user_id');
    }
    public function created_categories()
    {
        return $this->hasMany(Category::class, 'category_created_user_id');
    }
}
