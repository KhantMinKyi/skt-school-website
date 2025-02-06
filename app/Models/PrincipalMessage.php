<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalMessage extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'principal_message_created_user_id',
        'principal_message_updated_user_id',
        'principal_message_branch_id',
        'principal_message',
        'principal_photo',
        'principal_name',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'principal_message_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'principal_message_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'principal_message_branch_id');
    }
}
