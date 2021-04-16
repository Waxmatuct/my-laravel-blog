<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'name' => 'site_name', 
                'option' => 'Альвар'
            ],
            [
                'name' => 'site_description', 
                'option' => 'Блог на Laravel'
            ],
            [
                'name' => 'site_footer', 
                'option' => '<section class="credits">
                                <span class="credits-theme">Автор: Alvar</span>
                                <span class="credits-software">Сделан с любовью на Laravel</span>
                            </section>'
            ],
        ]);
    }
}
