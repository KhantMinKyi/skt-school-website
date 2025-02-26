<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'event_comment_event_id',
        'event_comment_branch_id',
        'event_comment_action_user_id',
        'event_comment_user_name',
        'event_comment_user_email',
        'event_comment_subject',
        'event_comment_body',
        'event_comment_status',
    ];
    public function action_user()
    {
        return $this->belongsTo(User::class, 'event_comment_action_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'event_comment_branch_id');
    }
    public function event()
    {
        return $this->belongsTo(event::class, 'event_comment_event_id');
    }
}
