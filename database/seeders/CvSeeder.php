<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cv;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cv::create([
            'name' => 'Md. Sajid Rahman',
            'position' => 'Computer Science Engineering Student',
            'address' => 'Chasara, Narayanganj',
            'contact' => 'Mobile: 01967080738, Email: rahmansajid2k25@gmail.com',
            'about' => 'I consider myself a responsible and disciplined person and am looking for my first job experience.',
            'education' => [
                [
                    'degree' => 'Bachelor of Computer Science and Engineering',
                    'institution' => 'Daffodil International University',
                    'year' => '2022-2026',
                    'cgpa' => '3.43'
                ],
                [
                    'degree' => 'Higher Secondary Certificate (HSC)',
                    'institution' => 'Dr. Mahbubur Rahman Mollah College (DMRC), Dhaka',
                    'year' => '2020-2021',
                    'gpa' => '5.00'
                ],
                [
                    'degree' => 'Secondary School Certificate (SSC)',
                    'institution' => 'St. Joseph School and College',
                    'year' => '2018-2019',
                    'gpa' => '4.73'
                ]
            ],
            'experience' => [
                'Protocol Member at Life Struggle of Pathikrit Entrepreneurs book launch and DIU JOB Utsob.'
            ],
            'skills' => [
                'Creativity',
                'Negotiation Skills',
                'Critical Thinking',
                'Leadership',
                'technical_skills' => [
                    ['skill' => 'Microsoft Word', 'proficiency' => 85],
                    ['skill' => 'Microsoft PowerPoint', 'proficiency' => 70],
                    ['skill' => 'Microsoft Excel', 'proficiency' => 50],
                    ['skill' => 'Programming and Problem Solving', 'proficiency' => 40],
                    ['skill' => 'Video Editing', 'proficiency' => 25]
                ]
            ],
            'languages' => ['Bengali', 'English'],
            'portfolio' => 'https://www.google.com/search?q=https://mdsajidrahman.blogspot.com/'
        ]);
    }
}
