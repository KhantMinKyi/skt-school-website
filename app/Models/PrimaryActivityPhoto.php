<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimaryActivityPhoto extends Model
{
    protected $fillable = [
        'primary_activity_created_user_id',
        'primary_activity_updated_user_id',
        'primary_activity_branch_id',
        'primary_activity_title',
        'primary_activity_file',
        'primary_activity_uid',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'primary_activity_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'primary_activity_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'primary_activity_branch_id');
    }
}
