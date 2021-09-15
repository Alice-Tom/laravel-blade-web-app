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
    ];

    public function subService(){
        return $this->hasMany(SubService::class);
    }
}
