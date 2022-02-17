<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship
{
    private static $scholarship_list = [
        [
            'slug' => 'sea-undergraduate-scholarship',
            'title' => 'SEA Undergratudate Scholarship Program',
            'speaker' => 'Nadila Setiabudiarto',
            'category' => 'Self Development',
            'registBy' => '10 Jan 2022',
            'eventDate' => 'Saturday, 15 Jan 2022',
            'time' => '13:00-15:00 WIB',
            'poster' => 'scholarship-1.jpeg'
        ],
        [
            'slug' => 'digital-talent-scholarship',
            'title' => 'Digital Talent Scholarship Program',
            'speaker' => 'Willson Cuaca',
            'category' => 'Self Development',
            'registBy' => '11 Jan 2022',
            'eventDate' => 'Sunday, 16 Jan 2022',
            'time' => '13:00-15:00 WIB',
            'poster' => 'scholarship-2.jpg'
        ],
        [
            'slug' => 'bsi-scholarship-prestasi',
            'title' => 'BSI Scholarship Prestasi Program',
            'speaker' => 'Kaesang Pangarep',
            'category' => 'Self Development',
            'registBy' => '12 Jan 2022',
            'eventDate' => 'Monday, 17 Jan 2022',
            'time' => '13:30-15:00 WIB',
            'poster' => 'scholarship-3.jpg'
        ],
        [
            'slug' => 'bakti-bca-scholarship',
            'title' => 'Bakti BCA Scholarship Program',
            'speaker' => 'TechnoScape x tiket.com',
            'category' => 'Self Development',
            'registBy' => '13 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '13:30-15:00 WIB',
            'poster' => 'scholarship-4.jpeg'
        ],
        [
            'slug' => 'tanoto-sahabat-pascasarjana-scholarship',
            'title' => 'Tanoto Sahabat Pascasarjana Scholarship Program',
            'speaker' => 'Dr. Ari Margiono (CIDER Binus)',
            'category' => 'Self Development',
            'registBy' => '14 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '10:25-11:30 WIB',
            'poster' => 'scholarship-5.jpeg'
        ],
        [
            'slug' => 'djarum-plus-scholarship',
            'title' => 'Djarum Plus Scholarship Program',
            'speaker' => 'Dr. Ari Margiono (CIDER Binus)',
            'category' => 'Self Development',
            'registBy' => '14 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'time' => '10:25-11:30 WIB',
            'poster' => 'scholarship-6.jpeg'
        ],
    ];

    public static function all()
    {
        return collect(self::$scholarship_list);
    }

    public static function find($slug)
    {
        $scholarship = static::all();

        return $scholarship->firstWhere('slug', $slug);
    }
}
