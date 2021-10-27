<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover',

        'bottom_title',
        'bottom_description',
        'bottom_cover',

        'bottom_title2',
        'bottom_description2',
        'bottom_cover2',

        'bottom_title3',
        'bottom_description3',
        'bottom_cover3',
    ];

    public function subService(){
        return $this->hasMany(SubService::class);
    }
}
