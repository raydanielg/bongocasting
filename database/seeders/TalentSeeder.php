<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Talent\Models\Model as TalentModel;

class TalentSeeder extends Seeder
{
    public function run(): void
    {
        // Data za mfano kwa ajili ya Model talent
        $talents = [
            ['name' => 'Flaviana Matata', 'email' => 'flaviana@example.com'],
            ['name' => 'Millen Magese', 'email' => 'millen@example.com'],
        ];

        foreach ($talents as $talent) {
            // Hapa tunatumia Model ya Talent module
            // Tunahakikisha tu model ipo
        }
    }
}
