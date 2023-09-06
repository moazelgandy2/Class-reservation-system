<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\grades;
use App\Models\students;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        grades::insert([
            [
                'grade_name' => 'Grade 10',
                'grade_price' => '70',
                'grade_img' => '/images/1st.png', // Provide the direct URL or path here
                'grade_buy_img' => '/images/1st-buy.png', // Provide the direct URL or path here
                'grade_times' => 'Sat/Tues 8 AM'
            ],
            [
                'grade_name' => 'Grade 11',
                'grade_price' => '80',
                'grade_img' => '/images/2sec.png', // Provide the direct URL or path here
                'grade_buy_img' => '/images/2sec-buy.png', // Provide the direct URL or path here
                'grade_times' => 'Sat/Tues 10 AM'
            ],
            [
                'grade_name' => 'Grade 12',
                'grade_price' => '90',
                'grade_img' => '/images/3rd-sec.png', // Provide the direct URL or path here
                'grade_buy_img' => '/images/3rd-sec-buy.png', // Provide the direct URL or path here
                'grade_times' => 'Sun/Wed 8 AM'
            ]
        ]);
        students::factory()->count(20)->create();
        User::insert([
            'name'=>'Admin',
            'email'=>'admin@demo.com',
            'role'=>'admin',
            'password'=>'$2y$10$fED4FLE63Hmr4/PihC0Dse8MBhxNEisTciy.hrbz2TibjCVplDqhK',
        ]);

    }
}
