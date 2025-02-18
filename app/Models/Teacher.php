<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'teacher_created_user_id',
        'teacher_updated_user_id',
        'teacher_branch_id',
        'teacher_name',
        // 'teacher_position',
        'teacher_class',
        'teacher_photo',
        'slug',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'teacher_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'teacher_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'teacher_branch_id');
    }
}
