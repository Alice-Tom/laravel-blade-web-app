<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1',
        'link1',
        'description1',
        'image1',

        'title2',
        'link2',
        'description2',
        'image2',

        'title3',
        'link3',
        'description3',
        'image3',

        //intro
        'intro_title',
        'intro_link',
        'intro_content',
        'intro_image',
        'intro_video',


        //section 3
        'sec3_title',
        'sec3_link',
        'sec3_content',
        'sec3_image',


        //section 4
        'sec4_title',
        'sec4_link',
        'sec4_content',
        'sec4_image',

        //staff
        'staff_title',
        'staff_link',
        'staff_content',

        //bottom
        'bottom1_title',
        'bottom1_link',
        'bottom1_description',

        'bottom2_title',
        'bottom2_link',
        'bottom2_description',

    ];
}
