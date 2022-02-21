<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature
{
    private static $feature_list = [
        [
            'slug' => 'mycourses',
            'name' => 'Courses',
            'icon' => 'icons-competitions.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 3
        ],
        [
            'slug' => 'mywebinars',
            'name' => 'Webinars',
            'icon' => 'icons-webinars.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 6
        ],
        [
            'slug' => 'mycompetitions',
            'name' => 'Competitions',
            'icon' => 'icons-competitions.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 4
        ],
        [
            'slug' => 'myscholarships',
            'name' => 'Scholarship',
            'icon' => 'icons-scholarships.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 6
        ],
    ];

    public static function all()
    {
        return collect(self::$feature_list);
    }
}
