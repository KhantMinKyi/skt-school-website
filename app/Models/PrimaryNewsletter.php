<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimaryNewsletter extends Model
{
    //
    protected $fillable = [
        'primary_newsletter_created_user_id',
        'primary_newsletter_updated_user_id',
        'primary_newsletter_branch_id',
        'primary_newsletter_title',
        'primary_newsletter_file',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'primary_newsletter_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'primary_newsletter_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'primary_newsletter_branch_id');
    }
}
