<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature
{
    private static $feature_list = [
        [
            'name' => 'Courses',
            'icon' => 'icons-competitions.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 10
        ],
        [
            'name' => 'Webinars',
            'icon' => 'icons-webinars.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 2
        ],
        [
            'name' => 'Competitions',
            'icon' => 'icons-competitions.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 1
        ],
        [
            'name' => 'Scholarship',
            'icon' => 'icons-scholarships.png',
            'description' => 'Lorem ipsum dolor sit amet.',
            'total' => 3
        ],
    ];

    public static function all()
    {
        return collect(self::$feature_list);
    }
}
