<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar
{
    private static $webinar_list = [
        [
            'slug' => 'whats-the-culture-like-to-work-in-educational-industry',
            'title' => 'INDUSTRIAL SHARING: "What\'s the Culture like to Work in Educational Industry"',
            'speaker' => 'Nadila Setiabudiarto',
            'registBy' => '10 Jan 2022',
            'eventDate' => 'Saturday, 15 Jan 2022',
            'time' => '13:00-15:00 WIB',
            'poster' => 'webinar-1.jpeg'
        ],
        [
            'slug' => 'entrepreneurship-in-time-of-crisis',
            'title' => 'STUDIUM GENERALE: "Entrepreneurship in Time of Crisis"',
            'speaker' => 'Willson Cuaca',
            'registBy' => '11 Jan 2022',
            'eventDate' => 'Sunday, 16 Jan 2022',
            'time' => '13:00-15:00 WIB',
            'poster' => 'webinar-2.jpg'
        ],
        [
            'slug' => 'successful-entrepreneurship-in-the-new-normal-era',
            'title' => 'STUDIUM GENERALE X WEBINAR HEBAT: "Successful Entrepreneurship in the New Normal Era"',
            'speaker' => 'Kaesang Pangarep',
            'registBy' => '12 Jan 2022',
            'eventDate' => 'Monday, 17 Jan 2022',
            'time' => '13:30-15:00 WIB',
            'poster' => 'webinar-3.jpg'
        ],
        [
            'slug' => 'technoscape-2020-bncc',
            'title' => 'TECHNOSCAPE 2020 – BINUS COMPUTER CLUB',
            'speaker' => 'TechnoScape x tiket.com',
            'registBy' => '13 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '13:30-15:00 WIB',
            'poster' => 'webinar-4.png'
        ],
        [
            'slug' => 'ideathonesia-2020-theory-of-change',
            'title' => 'Webinar Ideathonesia 2020 : Theory of Change',
            'speaker' => 'Dr. Ari Margiono (CIDER Binus)',
            'registBy' => '14 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '10:25-11:30 WIB',
            'poster' => 'webinar-5.jpeg'
        ],
        [
            'slug' => 'how-millennials-plan-their-financial-for-future-serenity',
            'title' => 'WEBINAR : "How Millennials Plan Their Financial for Future Serenity"',
            'speaker' => 'Dr. Ari Margiono (CIDER Binus)',
            'registBy' => '14 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '10:25-11:30 WIB',
            'poster' => 'webinar-6.jpg'
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
