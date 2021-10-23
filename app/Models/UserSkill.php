<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    protected $table="users_skills";
    use HasFactory;
    protected $fillable = [
        'user_id',
        'skill_id'
    ];
}
