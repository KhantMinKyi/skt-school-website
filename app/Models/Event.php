<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'event_banner',
        'event_title',
        'event_created_date',
        'event_created_user_id',
        'event_updated_user_id',
        'event_branch_id',
        'event_category_id',
        'event_is_show_front',
        'event_body',
        'event_video',
        'event_image',
        'event_is_active',
        'event_start_date',
        'event_end_date',
        'event_location',
        'event_registration_fee',
        'event_time',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'event_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'event_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'event_branch_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'event_category_id');
    }
    public function comments()
    {
        return $this->hasMany(EventComment::class, 'event_comment_event_id');
    }
}
