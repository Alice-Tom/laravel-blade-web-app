<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'category',
        'location',
        'min_salary',
        'max_salary',
        'tags',
        'description',
        'attachment',
        'user_id',
        'dead_line'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function applicants()
    {
        return $this->belongsToMany(User::class, 'job_user');
    }
}
