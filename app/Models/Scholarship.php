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
            'organization' => 'Nadila Setiabudiarto',
            'category' => 'SEA Group',
            'registBy' => '10 Jan 2022',
            'dueDate' => 'Saturday, 15 Jan 2022',
            'time' => '13:00 WIB',
            'poster' => 'scholarship-1.jpeg'
        ],
        [
            'slug' => 'digital-talent-scholarship',
            'title' => 'Digital Talent Scholarship Program',
            'organization' => 'Kominfo',
            'category' => 'Other Degree',
            'registBy' => '11 Jan 2022',
            'dueDate' => 'Sunday, 16 Jan 2022',
            'time' => '13:00 WIB',
            'poster' => 'scholarship-2.jpg'
        ],
        [
            'slug' => 'bsi-scholarship-prestasi',
            'title' => 'BSI Scholarship Prestasi Program',
            'organization' => 'PT Bank Syariah Indonesia',
            'category' => 'Bachelor Degree',
            'registBy' => '12 Jan 2022',
            'dueDate' => 'Monday, 17 Jan 2022',
            'time' => '18:30 WIB',
            'poster' => 'scholarship-3.jpg'
        ],
        [
            'slug' => 'bakti-bca-scholarship',
            'title' => 'Bakti BCA Scholarship Program',
            'organization' => 'PT Bank Central Asia',
            'category' => 'Other Degree',
            'registBy' => '13 Jan 2022',
            'dueDate' => 'Tuesday, 18 Jan 2022',
            'time' => '23:59 WIB',
            'poster' => 'scholarship-4.jpeg'
        ],
        [
            'slug' => 'tanoto-sahabat-pascasarjana-scholarship',
            'title' => 'Tanoto Sahabat Pascasarjana Scholarship Program',
            'organization' => 'Tanoto Fondation',
            'category' => 'Master Degree',
            'registBy' => '14 Jan 2022',
            'dueDate' => 'Tuesday, 18 Jan 2022',
            'time' => '10:00 WIB',
            'poster' => 'scholarship-5.jpeg'
        ],
        [
            'slug' => 'djarum-plus-scholarship',
            'title' => 'Djarum Plus Scholarship Program',
            'organization' => 'PT Djarum',
            'category' => 'Bachelor Degree',
            'registBy' => '14 Jan 2022',
            'dueDate' => 'Tuesday, 18 Jan 2022',
            'time' => '12:00 WIB',
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
