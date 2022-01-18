<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship
{
    private static $competition_list = [
        [
            'slug' => 'how-to-play-guitar',
            'title' => 'How to Play Guitar',
            'category' => 'music',
            'organizer' => 'Fiersa Kecili',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa vitae, laborum voluptas, accusamus quod, neque minus dolore molestiae enim inventore ipsam eum exercitationem temporibus harum?',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'math-for-fun',
            'title' => 'Math for Fun',
            'category' => 'math',
            'organizer' => 'Jojo Winata',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'introduction-to-c++',
            'title' => 'Introduction to C++',
            'category' => 'programming',
            'organizer' => 'Maaruf Amin',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'mindfulness',
            'title' => 'Mindfulness',
            'category' => 'mindfulness',
            'organizer' => 'Kevin Jow',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'building-a-future-with-robots',
            'title' => 'Building a Future with Robots',
            'category' => 'technology',
            'organizer' => 'Morris King',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'english-in-focus',
            'title' => 'English in Focus',
            'category' => 'language',
            'organizer' => 'Simu Liu',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'introduction-to-laravel8',
            'title' => 'Introduction to Laravel 8',
            'category' => 'programming',
            'organizer' => 'Tony Stark',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'astronomy',
            'title' => 'Astronomy',
            'category' => 'magic',
            'organizer' => 'Prof. Aurora Sinistra',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'history-of-magic',
            'title' => 'History of Magic',
            'category' => 'magic',
            'organizer' => 'Cuthbert Binns',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'introduction-to-potions',
            'title' => 'Introduction to Potions',
            'category' => 'magic',
            'organizer' => 'Severus Snape',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'muggle-studies',
            'title' => 'Muggle Studies',
            'category' => 'magic',
            'organizer' => 'Charity Burbage',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
        [
            'slug' => 'how-to-fly',
            'title' => 'How to Fly',
            'category' => 'magic',
            'organizer' => 'Rolanda Hooch',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'date' => '17-01-2022'
        ],
    ];

    public static function all()
    {
        return collect(self::$competition_list);
    }

    public static function find($slug)
    {
        $competition = static::all();

        return $competition->firstWhere('slug', $slug);
    }
}
