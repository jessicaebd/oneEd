<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course
{
    private static $courses_list = [
        [
            'slug' => 'how-to-play-guitar',
            'title' => 'How to Play Guitar',
            'category' => 'music',
            'mentorName' => 'Fiersa Kecili',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 10
        ],
        [
            'slug' => 'math-for-fun',
            'title' => 'Math for Fun',
            'category' => 'math',
            'mentorName' => 'Jojo Winata',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15
        ],
        [
            'slug' => 'introduction-to-c++',
            'title' => 'Introduction to C++',
            'category' => 'programming',
            'mentorName' => 'Maaruf Amin',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 30
        ],
        [
            'slug' => 'mindfulness',
            'title' => 'Mindfulness',
            'category' => 'mindfulness',
            'mentorName' => 'Kevin Jow',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 12
        ],
        [
            'slug' => 'building-a-future-with-robots',
            'title' => 'Building a Future with Robots',
            'category' => 'technology',
            'mentorName' => 'Morris King',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15
        ],
        [
            'slug' => 'english-in-focus',
            'title' => 'English in Focus',
            'category' => 'language',
            'mentorName' => 'Simu Liu',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15
        ],
        [
            'slug' => 'introduction-to-laravel8',
            'title' => 'Introduction to Laravel 8',
            'category' => 'programming',
            'mentorName' => 'Tony Stark',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 40
        ]
    ];

    public static function all()
    {
        return collect(self::$courses_list);
    }

    public static function find($slug)
    {
        $courses = static::all();

        return $courses->firstWhere('slug', $slug);
    }
}
