<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'post_comment_post_id',
        'post_comment_action_user_id',
        'post_comment_user_name',
        'post_comment_user_email',
        'post_comment_subject',
        'post_comment_body',
        'post_comment_status',
    ];
    public function action_user()
    {
        return $this->belongsTo(User::class, 'post_comment_action_user_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_comment_post_id');
    }
}
