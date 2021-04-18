<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Жизнь',
                'slug' => Str::slug('жизнь'),
            ],
            [
                'title' => 'Работа',
                'slug' => Str::slug('работа'),
            ],
            [
                'title' => 'Отдых',
                'slug' => Str::slug('отдых'),
            ],
            [
                'title' => 'Интернет',
                'slug' => Str::slug('интернет'),
            ],
        ]);
    }
}