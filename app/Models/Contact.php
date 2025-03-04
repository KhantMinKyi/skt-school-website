<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'contact_branch_id',
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_message',
    ];
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'contact_branch_id');
    }
}
