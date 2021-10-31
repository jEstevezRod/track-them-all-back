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
           [ 'name' => 'Vital'],
           [ 'name' => 'Restaurantes'],
           [ 'name' => 'Crypto'],
           [ 'name' => 'Ocio'],
           [ 'name' => 'Alimentación'],
           [ 'name' => 'Ropa'],
           [ 'name' => 'Subscripciones'],
           [ 'name' => 'Coche'],
           [ 'name' => 'Cuenta ahorro'],
           [ 'name' => 'Cursos y formación'],
           [ 'name' => 'Software'],
           [ 'name' => 'Cuenta ahorro'],
           [ 'name' => 'Otros'],
        ];

        Category::insert($categories);
    }
}
