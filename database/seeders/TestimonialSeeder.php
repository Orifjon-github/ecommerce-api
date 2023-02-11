<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
           'name' => 'Orifjon Oripov',
           'body' => 'Juda ham zo\'r',
            'rating' => 5,
            'image' => '/storage/homepage/users/user-1.png'
        ]);
        Testimonial::create([
            'name' => 'Orifjon Oripov',
            'body' => 'Juda ham zo\'r',
            'rating' => 5,
            'image' => '/storage/homepage/users/user-1.png'
        ]);
        Testimonial::create([
            'name' => 'Orifjon Oripov',
            'body' => 'Juda ham zo\'r',
            'rating' => 5,
            'image' => '/storage/homepage/users/user-1.png'
        ]);
    }
}
