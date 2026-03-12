<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Juma Jux',
                'role' => 'Musician',
                'content' => 'BongoCasting imekuwa mkombozi katika kutafuta wasanii wa video zangu.',
                'rating' => 5,
            ],
            [
                'name' => 'Elizabeth Michael',
                'role' => 'Actress',
                'content' => 'Nimepata madili mengi ya casting kupitia platform hii. Inarahisisha kazi sana.',
                'rating' => 5,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
