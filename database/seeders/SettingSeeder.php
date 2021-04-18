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
                'option' => '<section class="credits">
                <span class="credit">Сделан с любовью на Laravel</span>
                <span class="credit">
                    <div class="social-links">
                        <a class="social-link social-link-telegram" href="#" title="Telegram" target="_blank" rel="noopener"></a>
                        <a class="social-link social-link-tw" href="#" title="Twitter" target="_blank" rel="noopener"></a>
                        <a class="social-link social-link-fb" href="#" title="Facebook" target="_blank" rel="noopener"></a>
                        <a class="social-link social-link-insta" href="#" title="Instagram" target="_blank" rel="noopener"></a>
                    </div>
                </span>
            </section>'
            ],
        ]);
    }
}
