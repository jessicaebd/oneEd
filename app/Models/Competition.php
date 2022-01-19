<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition
{
    private static $competition_list = [
        [
            'slug' => 'indigo-hackathon-festival',
            'title' => 'Indigo Hackathon Festival',
            'organizer' => 'Indigo Creative Nation',
            'registrationDate' => '10 Jan 2022',
            'eventDate' => 'Saturday, 15 Jan 2022',
            'poster' => 'competition-1.png'
        ],
        [
            'slug' => 'hack-gov-hackathon',
            'title' => 'Hack-Gov: Hackathon',
            'organizer' => 'Kementrian PPN/Bappenas',
            'registrationDate' => '11 Jan 2022',
            'eventDate' => 'Sunday, 16 Jan 2022',
            'poster' => 'competition-2.jpg'
        ],
        [
            'slug' => 'necfest-2021',
            'title' => 'NECFEST – National Essay Competition Festival 2021',
            'organizer' => 'BEM KM SV UGM',
            'registrationDate' => '12 Jan 2022',
            'eventDate' => 'Monday, 17 Jan 2022',
            'poster' => 'competition-3.jpeg'
        ],
        [
            'slug' => 'undip-biology-competition-2021',
            'title' => 'UNDIP Biology Competition : Active, Creative, Solutive in The Global Pandemic',
            'organizer' => 'Himpunan Mahasiswa Biologi UNDIP',
            'registrationDate' => '13 Jan 2022',
            'eventDate' => 'Tuesday, 18 Jan 2022',
            'poster' => 'competition-4.jpeg'
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
