<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::insert([
            [
                'name' => 'basic',
                'price' => 350,
                'is_discounted' => true,
                'discounted_price' => 149,
                'discount_text_en' => '50% off only until the end of January',
                'discount_text_fa' => 'فقط تا پایان ژانویه ۵۰٪ تخفیف',
                'discount_text_de' => 'Nur bis Ende Januar 50% Rabatt',
            ],
            [
                'name' => 'silver',
                'price' => 550,
                'is_discounted' => true,
                'discounted_price' => 275,
                'discount_text_en' => '50% off only until the end of January',
                'discount_text_fa' => 'فقط تا پایان ژانویه ۵۰٪ تخفیف',
                'discount_text_de' => 'Nur bis Ende Januar 50% Rabatt',
            ],
            [
                'name' => 'gold',
                'price' => 850,
                'is_discounted' => true,
                'discounted_price' => 425,
                'discount_text_en' => '50% off only until the end of January',
                'discount_text_fa' => 'فقط تا پایان ژانویه ۵۰٪ تخفیف',
                'discount_text_de' => 'Nur bis Ende Januar 50% Rabatt',
            ],
            [
                'name' => 'videography',
                'price' => 250,
                'is_discounted' => true,
                'discounted_price' => 140,
                'discount_text_en' => '50% off only until the end of January',
                'discount_text_fa' => 'فقط تا پایان ژانویه ۵۰٪ تخفیف',
                'discount_text_de' => 'Nur bis Ende Januar 50% Rabatt',
            ],
        ]);
    }
}
