<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new \App\Models\Category();
        $category->nom ="Informatique";
        $category->is_online=1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom ="Philosophy";
        $category->is_online=1;
        $category->save();
    }
}
