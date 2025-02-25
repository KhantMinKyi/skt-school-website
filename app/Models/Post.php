<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'post_banner',
        'post_title',
        'post_created_date',
        'post_created_user_id',
        'post_updated_user_id',
        'post_branch_id',
        'post_category_id',
        'post_is_show_front',
        'post_body',
        'post_video',
        'post_image',
        'post_is_active',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'post_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'post_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'post_branch_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'post_category_id');
    }
    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_comment_post_id');
    }
}
