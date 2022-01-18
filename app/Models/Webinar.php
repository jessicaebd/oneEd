<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar
{
    private static $webinar_list = [
        [
            'slug' => 'how-to-play-guitar',
            'title' => 'How to Play Guitar',
            'category' => 'music',
            'speaker' => 'Fiersa Kecili',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa vitae, laborum voluptas, accusamus quod, neque minus dolore molestiae enim inventore ipsam eum exercitationem temporibus harum?',
            'date' => '17-01-2022',
            'time' => '10:00',
            'duration' => 200,
        ],
        [
            'slug' => 'history-of-magic',
            'title' => 'History of Magic',
            'category' => 'magic',
            'speaker' => 'Cuthbert Binns',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022',
            'time' => '10:00',
            'duration' => 15
        ],
        [
            'slug' => 'introduction-to-potions',
            'title' => 'Introduction to Potions',
            'category' => 'magic',
            'speaker' => 'Severus Snape',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022',
            'time' => '10:00',
            'duration' => 20
        ],
        [
            'slug' => 'muggle-studies',
            'title' => 'Muggle Studies',
            'category' => 'magic',
            'speaker' => 'Charity Burbage',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022',
            'time' => '10:00',
            'duration' => 14
        ],
        [
            'slug' => 'how-to-fly',
            'title' => 'How to Fly',
            'category' => 'magic',
            'speaker' => 'Rolanda Hooch',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022',
            'time' => '10:00',
            'duration' => 15
        ],
    ];

    public static function all()
    {
        return collect(self::$webinar_list);
    }

    public static function find($slug)
    {
        $webinars = static::all();

        return $webinars->firstWhere('slug', $slug);
    }
}
