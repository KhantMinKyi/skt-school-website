<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'calendar_created_user_id',
        'calendar_updated_user_id',
        'calendar_branch_id',
        'calendar_title',
        'calendar_photo',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'calendar_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'calendar_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'calendar_branch_id');
    }
}
