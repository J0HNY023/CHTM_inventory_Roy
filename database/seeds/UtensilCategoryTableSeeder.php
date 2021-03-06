<?php

use App\UtensilCategory;
use Illuminate\Database\Seeder;

class UtensilCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
              $categories = [
            ['name' => 'Spoon'],
            ['name' => 'Fork'],
            ['name' => 'Cups'],
            ['name' => 'Plates'],
            ['name' => 'Knife'],
        ];
        UtensilCategory::insert($categories);
    }
}
