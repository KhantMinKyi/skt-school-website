<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'statement_created_user_id',
        'statement_updated_user_id',
        'statement_branch_id',
        'statement_vision',
        'statement_mission',
        'statement_philosophy',
        'statement_photo',
        'slug',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'statement_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'statement_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'statement_branch_id');
    }
}
