<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherType extends Model
{
    protected $fillable = [
        'title',
        'teacher_type_branch_id',
    ];
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'teacher_type_branch_id');
    }
}
