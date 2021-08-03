<?php

use Illuminate\Database\Seeder;

use App\News;

// this is a seeder for fake news (page "/news")
class FakeNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        $faker = \Faker\Factory::create();

        // fake important news
        News::create([
            'title'             => "Совсем скоро мы увидим нечто новое!",
            'description'       => "Компания SGC представила трейлер на презентации Xbox, показав все возможности движка",
            'text'              => $faker->text(),
            'slug'              => $faker->slug(),
            'picture'           => NULL,
            'category'          => News::CATEGORIES['other'],
            'type'              => News::TYPES['important'],
            'isTimelineItem'    => false,
            'isAdvertisement'   => false,
            'views'             => $faker->numberBetween(1000, 100000),
            'settings'          => NULL,
        ]);

        $videoNewsTitles = [
            "В сеть слили новые ассеты игры: ботинки и батон",
            "Грандиозный сюжет, множество концовок и настоящий открытый мир: новые  подробности S.T.A.L.K.E.R. 2",
            "STALKER 2 Очень крутой, но есть опасения",
            "STALKER 2 — Трейлер игры (4K, 2020)",
            "STALKER 2: Сердце Чернобыля — Официальный ...",
            "S.T.A.L.K.E.R. 2: Heart of Chernobyl",
            "GSC Game World объяснила слабый ИИ врагов в трейлере S.T.A.L.K.E.R. 2:  Heart of Chernobyl | GameMAG",
        ];
        $videoNewsTitlesCount = count($videoNewsTitles) - 1;

        // fake video news
        foreach (range(1, 4) as $index)
        {
            News::create([
                'title'             => $videoNewsTitles[random_int(0, $videoNewsTitlesCount)],
                'description'       => NULL,
                'text'              => $faker->text(),
                'slug'              => $faker->slug(),
                'picture'           => NULL,
                'category'          => News::CATEGORIES['other'],
                'type'              => News::TYPES['video'],
                'isTimelineItem'    => false,
                'isAdvertisement'   => false,
                'views'             => $faker->numberBetween(1000, 100000),
                'settings'          => NULL,
            ]);
        }

        // fake popular news


        // the best
    }
}
