<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Me Page with Data
Route::get('/about', function () {
    $data = [
        'name' => 'MD SAJID RAHMAN',
        'title' => 'Laravel Full-Stack Developer',
        'education' => 'B.Sc. in Computer Science and Engineering, [আপনার ইউনিভার্সিটি]',
        'experience' => '২ বছরের অভিজ্ঞতা - PHP, Laravel এবং MySQL-এ কাজ করেছি।',
        'skills' => ['Laravel (Eloquent, Blade, Routes)', 'PHP', 'JavaScript (Basic)', 'Tailwind CSS', 'MySQL/MariaDB', 'Git/GitHub', 'REST APIs'],
        'bio' => 'আমি আধুনিক এবং কার্যকরী ওয়েব অ্যাপ্লিকেশন তৈরির প্রতি আগ্রহী। নতুন চ্যালেঞ্জ গ্রহণ করে সমস্যা সমাধান করতে ভালোবাসি এবং কোডিং এর মাধ্যমে একটি উন্নত ইউজার অভিজ্ঞতা দিতে চাই।',
    ];
    return view('about', $data);
})->name('about');

// Projects Page with Data
Route::get('/projects', function () {
    $projects = [
        [
            'name' => 'Full E-commerce Platform', 
            'description' => 'Laravel এবং Vue.js ব্যবহার করে তৈরি একটি সম্পূর্ণ বৈশিষ্ট্যযুক্ত ই-কমার্স সমাধান, যেখানে পেমেন্ট ইন্টিগ্রেশন এবং অ্যাডমিন প্যানেল রয়েছে।', 
            'tech' => 'Laravel 10, Vue.js, MySQL, Tailwind CSS',
            'link' => '#',
        ],
        [
            'name' => 'Task Management App', 
            'description' => 'ব্যবহারকারীদের জন্য সহজ এবং কার্যকরী টু-ডু লিস্ট এবং প্রজেক্ট ট্র্যাকিং অ্যাপ্লিকেশন। এটি RESTful API ব্যবহার করে তৈরি।', 
            'tech' => 'Laravel API, React, PostgreSQL',
            'link' => '#',
        ],
        [
            'name' => 'Real-Time Chat Application', 
            'description' => 'Laravel Echo এবং Redis ব্যবহার করে তৈরি রিয়েল-টাইম মেসেজিং প্ল্যাটফর্ম।', 
            'tech' => 'Laravel, Redis, WebSocket, Bootstrap',
            'link' => '#',
        ],
    ];
    return view('projects', ['projects' => $projects]);
})->name('projects');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Note: For a functional Contact Form, you would need a Controller and Laravel Mail setup. 
// This is a static view for now.