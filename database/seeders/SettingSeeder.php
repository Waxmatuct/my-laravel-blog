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
                'option' => 'Alvar'
            ],
            [
                'name' => 'site_description', 
                'option' => 'Блог на Laravel'
            ],
            [
                'name' => 'site_footer', 
                'option' => '<section class="credits mx-auto py-5 w-full flex flex-col items-center justify-center">
                <span class="credit text-sm">Сделан с любовью на Laravel</span>
                <span class="credit">
                    <div class="social-links block my-2.5">
                        <a class="icon-telegram block w-5 h-5 mr-2.5" href="#" title="Telegram" target="_blank" rel="noopener"></a> 
                        <a class="icon-twitter block w-5 h-5 mr-2.5" href="#" title="Twitter" target="_blank" rel="noopener"></a>
                        <a class="icon-facebook block w-5 h-5 mr-2.5" href="#" title="Facebook" target="_blank" rel="noopener"></a>
                        <a class="icon-instagram block w-5 h-5" href="#" title="Instagram" target="_blank" rel="noopener"></a>
                    </div>
                </span>
            </section>'
            ],
        ]);
    }
}
