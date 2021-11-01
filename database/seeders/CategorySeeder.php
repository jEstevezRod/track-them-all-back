<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Vital',
                'background_color' => 'red-12',
                'text_color' => 'grey-10',
                'icon' => 'face',
            ],
            [
                'name' => 'Restaurantes',
                'background_color' => 'purple-3',
                'text_color' => 'grey-10',
                'icon' => 'restaurant_menu'
            ],
            [
                'name' => 'Crypto',
                'background_color' => 'deep-purple-12',
                'text_color' => 'grey-10',
                'icon' => 'paid'
            ],
            [
                'name' => 'Ocio',
                'background_color' => 'indigo-12',
                'text_color' => 'grey-10',
                'icon' => 'local_mall'
            ],
            [
                'name' => 'Alimentación',
                'background_color' => 'light-blue-12',
                'text_color' => 'grey-10',
                'icon' => 'set_meal'
            ],
            [
                'name' => 'Ropa',
                'background_color' => 'teal-12',
                'text_color' => 'grey-10',
                'icon' => 'checkroom'
            ],
            [
                'name' => 'Subscripciones',
                'background_color' => 'green-12',
                'text_color' => 'grey-10',
                'icon' => 'subscriptions'
            ],
            [
                'name' => 'Coche',
                'background_color' => 'light-green-12',
                'text_color' => 'grey-10',
                'icon' => 'directions_car'
            ],
            [
                'name' => 'Cuenta ahorro',
                'background_color' => 'lime-12',
                'text_color' => 'grey-10',
                'icon' => 'savings'
            ],
            [
                'name' => 'Cursos y formación',
                'background_color' => 'amber-12',
                'text_color' => 'grey-10',
                'icon' => 'school'
            ],
            [
                'name' => 'Software',
                'background_color' => 'amber-12',
                'text_color' => 'grey-10',
                'icon' => 'lens_blur'
            ],
            [
                'name' => 'BBVA',
                'background_color' => 'deep-orange-12',
                'text_color' => 'grey-10',
                'icon' => 'account_balance'
            ],
            [
                'name' => 'Otros',
                'background_color' => 'grey-12',
                'text_color' => 'grey-10',
                'icon' => 'alt_route'
            ],
        ];

        Category::insert($categories);
    }
}
