<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = 'training';

    protected $fillable = [
        'title',
        'description',
        'venue',
        'cover',
        'start_day',
        'start_time',
        'end_day',
        'end_time',
        'trainer',
        
    ];
}
