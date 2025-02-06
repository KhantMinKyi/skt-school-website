<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'history_created_user_id',
        'history_updated_user_id',
        'history_branch_id',
        'history_body',
        'history_title',
        'history_photo',
        'slug',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'history_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'history_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'history_branch_id');
    }
}
