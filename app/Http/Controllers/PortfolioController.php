<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Neeraj Dubey',
            'role' => 'PHP & React Native Developer',
            'about' => 'I’m a passionate web developer skilled in PHP, Laravel, and front-end technologies like React Native, Bootstrap, and jQuery.',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'React Native', 'Laravel', 'PHP', 'MySQL', 'Bootstrap', 'jQuery'],
            'github_user' => '@neerajdubey',
    'projects' => [
        [
            'title' => 'Employee Attendance System',
            'desc' => 'Role-based attendance management app using Core PHP & MySQL.',
            'image' => 'attendance.png',
            'link' => 'https://github.com/dubeyarjun/Employee-Attendance'
        ],
        [
            'title' => 'Recipe App',
            'desc' => 'Responsive recipe finder using HTML, CSS & API integration.',
            'image' => 'recipe.png',
            'link' => 'https://github.com/dubeyarjun/Recipe-App'
        ],
          [
            'title' => 'Matching-Card-Games',
            'desc' => 'Responsive Matching-Card-Games using HTML, CSS & JavaScript.',
            'image' => 'cardgame.webp',
            'link' => 'https://github.com/dubeyarjun/Matching-Card-Games'
        ],
          [
            'title' => 'Instagram Clone',
            'desc' => 'Responsive Instagram Clone Android Application  using React Native & API integration.',
            'image' => 'instaclone.webp',
            'link' => 'https://github.com/dubeyarjun/Instagram'
        ],
          [
            'title' => 'Voting-system',
            'desc' => 'Responsive Voting-system using Php, my sql use methode pdo(data object).',
            'image' => 'vote.png',
            'link' => 'https://github.com/dubeyarjun/Voting-system'
        ],
        [
            'title' => 'Laravel Portfolio',
            'desc' => 'Modern single-page portfolio built with Laravel and jQuery animations.',
            'image' => 'potfolio.png',
            'link' => 'https://github.com/neerajdubey/laravel-portfolio'
        ],
    ],
            'email' => 'dubeyneeraj412@gmail.com',
            'phone' => '9125438519',
            'linkedin' => 'https://linkedin.com/in/neeraj-dubey-3b06141b6',
            'github' => 'https://github.com/dubeyarjun'
        ];

        return view('portfolio', $data);
    }
}
