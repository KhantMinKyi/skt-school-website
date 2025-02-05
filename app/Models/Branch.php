<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'branch_name',
        'branch_short_name',
        'branch_location',
        'branch_logo',
        'branch_description',
        'is_active',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_branch_id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'event_branch_id');
    }
}
