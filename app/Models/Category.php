<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'category_title',
        'category_description',
        'category_created_user_id',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'category_created_user_id');
    }
}
