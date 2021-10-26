<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'intro_title',
        'intro_link',
        'intro_description',
        'intro_image',

        'who_are_we',

        'mission1_title',
        'mission1_description',
        'mission1_icon',

        'mission2_title',
        'mission2_description',
        'mission2_icon',

        'culture_title',
        'culture_description',
        'culture_description_blockquote',

        'proposition_title',
        'proposition_icon',

        'team_title',
        'team_description',

    ];
}
