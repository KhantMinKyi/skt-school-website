<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'gallery_created_user_id',
        'gallery_updated_user_id',
        'gallery_branch_id',
        'gallery_title',
        'gallery_photo',
        'gallery_category',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'gallery_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'gallery_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'gallery_branch_id');
    }
}
