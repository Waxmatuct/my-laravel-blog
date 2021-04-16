<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1, 5),
                'title' => 'Заголовок поста № '.$i,
                'description' => 'Идейные соображения высшего порядка, а также базовый вектор развития предполагает независимые способы реализации модели развития. Задача организации, в особенности же начало повседневной работы по формированию позиции способствует подготовке и реализации стандартных подходов.',
                'content' => '<p>Приятно, граждане, наблюдать, как тщательные исследования конкурентов будут ограничены исключительно образом мышления. Есть над чем задуматься: активно развивающиеся страны третьего мира могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Следует отметить, что сплочённость команды профессионалов обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.

                Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: перспективное планирование является качественно новой ступенью своевременного выполнения сверхзадачи. Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
                
                Вот вам яркий пример современных тенденций - постоянный количественный рост и сфера нашей активности, в своём классическом представлении, допускает внедрение анализа существующих паттернов поведения. Современные технологии достигли такого уровня, что сплочённость команды профессионалов требует определения и уточнения приоритизации разума над эмоциями. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: начало повседневной работы по формированию позиции является качественно новой ступенью дальнейших направлений развития. Как принято считать, явные признаки победы институционализации набирают популярность среди определенных слоев населения, а значит, должны быть заблокированы в рамках своих собственных рациональных ограничений. Вот вам яркий пример современных тенденций - разбавленное изрядной долей эмпатии, рациональное мышление однозначно определяет каждого участника как способного принимать собственные решения касаемо инновационных методов управления процессами.</p>',
                'slug' => 'post-'.$i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
