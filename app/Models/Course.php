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
            'category' => 'Music',
            'mentorName' => 'Fiersa Kecili',
            'description' => 'Learn how to play guitar! Our Beginner guitar lesson courses will take you from the absolute basics of how to hold and tune a guitar, all the way to being able to play chords, scales and full songs and guitar solos. You’ll feel confident learning with our easy-to-follow lessons that build on your skills slowly, so you move on to the next level with ease.',
            'duration' => 10,
            'poster' => 'course-1.jpg'
        ],
        [
            'slug' => 'math-for-fun-geometry-and-trigonometry',
            'title' => 'Math for Fun: Geometry and Trigonometry',
            'category' => 'Math',
            'mentorName' => 'Jojo Winata',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15,
            'poster' => 'course-2.jpg'
        ],
        [
            'slug' => 'introduction-to-c++',
            'title' => 'Introduction to C++',
            'category' => 'Programming',
            'mentorName' => 'Maaruf Amin',
            'description' => 'This specialization is intended for people without programming experience who seek to develop C++ programming skills and learn about the underlying computer science concepts that will allow them to pick up other programming languages quickly. In these four courses, you will cover everything from fundamentals to object-oriented design.',
            'duration' => 30,
            'poster' => 'course-3.jpg'
        ],
        [
            'slug' => 'mindfulness',
            'title' => 'Mindfulness',
            'category' => 'Mindfulness',
            'mentorName' => 'Kevin Jow',
            'description' => 'This course offers research-based strategies for building resilience to stress and fortifying our well-being in the face of challenges. It explains the biological and psychological impact of stress, helps you distinguish between harmful and helpful forms of stress at work, and provides strategies for handling stress in healthy and productive ways.',
            'duration' => 12,
            'poster' => 'course-4.png'
        ],
        [
            'slug' => 'building-a-future-with-robots',
            'title' => 'Building a Future with Robots',
            'category' => 'Technology',
            'mentorName' => 'Morris King',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15,
            'poster' => 'course-5.jpg'
        ],
        [
            'slug' => 'english-in-focus',
            'title' => 'English in Focus',
            'category' => 'Language',
            'mentorName' => 'Simu Liu',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15,
            'poster' => 'course-6.jpg'
        ],
        [
            'slug' => 'introduction-to-laravel8',
            'title' => 'Introduction to Laravel 8',
            'category' => 'Programming',
            'mentorName' => 'Anil Sidhu',
            'description' => 'This tutorial will guide the developers and students who want to learn how to develop a website using Laravel. This tutorial is particularly meant for all those developers who have no prior experience of using Laravel.',
            'duration' => 40,
            'poster' => 'course-7.jpg'
        ],
        [
            'slug' => 'astronomy-exploring-the-universe',
            'title' => 'Astronomy: Exploring the Universe',
            'category' => 'Science',
            'mentorName' => 'Prof. Aurora Sinistra',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 70,
            'poster' => 'course-8.jpg'
        ],
        [
            'slug' => 'history-of-magic',
            'title' => 'History of Magic',
            'category' => 'Magic',
            'mentorName' => 'Cuthbert Binns',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15,
            'poster' => 'course-9.jpg'
        ],
        [
            'slug' => 'introduction-to-potions',
            'title' => 'Introduction to Potions',
            'category' => 'Magic',
            'mentorName' => 'Severus Snape',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 20,
            'poster' => 'course-10.png'
        ],
        [
            'slug' => 'muggle-studies',
            'title' => 'Muggle Studies',
            'category' => 'Magic',
            'mentorName' => 'Flourish Klink',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 14,
            'poster' => 'course-11.png'
        ],
        [
            'slug' => 'big-bang-theory',
            'title' => 'Big Bang Theory',
            'category' => 'Science',
            'mentorName' => 'Rolanda Hooch',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
            'duration' => 15,
            'poster' => 'course-12.jpg'
        ],
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
