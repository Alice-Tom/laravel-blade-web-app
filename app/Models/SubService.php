<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'top_title',
        'top_description',
        'image',
        'bottom_title',
        'bottom_description',
        'service_id'
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
