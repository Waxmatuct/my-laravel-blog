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
                'option' => '<section class="credits mx-auto py-8 w-full flex flex-col items-center justify-center">
                <span class="credit text-sm">Сделан с любовью на Laravel</span>
                <span class="credit">
                    <div class="social-links flex my-2.5">
                        <a class="icon-telegram block w-5 h-5 mr-2.5" href="#" title="Telegram" target="_blank" rel="noopener"></a> 
                        <a class="icon-twitter block w-5 h-5 mr-2.5" href="#" title="Twitter" target="_blank" rel="noopener"></a>
                        <a class="icon-facebook block w-5 h-5 mr-2.5" href="#" title="Facebook" target="_blank" rel="noopener"></a>
                        <a class="icon-instagram block w-5 h-5" href="#" title="Instagram" target="_blank" rel="noopener"></a>
                    </div>
                </span>
                <a class="block mt-5" href="/login">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </a>
            </section>'
            ],
        ]);
    }
}
