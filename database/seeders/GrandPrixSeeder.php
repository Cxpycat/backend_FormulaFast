<?php

namespace Database\Seeders;

use App\Models\GrandPrix;
use Illuminate\Database\Seeder;

class GrandPrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GrandPrix::create([
            'title' => 'Гран-при Бахрейна',
            'title_track' => 'Сахир',
            'img' => 'https://top-racing.tv/uploads/images/b1709e26ea653a99156fb5ad240ee585_1684762763.png',
            'country_id' => 1
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Саудовской Аравии',
            'title_track' => 'Трасса Джидды Корниш',
            'img' => 'https://top-racing.tv/uploads/images/aa7e76183905c5d2ad35334a61e2d813_1684763405.png',
            'country_id' => 2
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Австралии',
            'title_track' => 'Альберт-парк',
            'img' => 'https://top-racing.tv/uploads/images/61644d505b1ee3758bb0d931bddbe019_1684763022.png',
            'country_id' => 3
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Азербайджана',
            'title_track' => 'Baku City Circuit',
            'img' => 'https://top-racing.tv/uploads/images/eaca1b92544481711c9b238182500e8a_1684593529.png',
            'country_id' => 4
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Майами',
            'title_track' => 'Международный автодром Майами',
            'img' => 'https://top-racing.tv/uploads/images/2af79fa7130d0b223d8b37b05471b43f_1684841048.png',
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Эмилии-Романьи',
            'title_track' => 'Автодром Энцо и Дино Феррари',
            'img' => 'https://top-racing.tv/uploads/images/2af79fa7130d0b223d8b37b05471b43f_1684841048.png',
            'country_id' => 13
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Монако',
            'title_track' => 'Монте-Карло',
            'img' => 'https://top-racing.tv/uploads/images/8cb2a1c89833d0f64ce1940bd1d12f7d_1684762638.png',
            'country_id' => 5
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Испании',
            'title_track' => 'Circuit de Barcelona-Catalunya',
            'img' => 'https://top-racing.tv/uploads/images/5c6677c9f8e06989c828fc9fe41a7b35_1684763306.png',
            'country_id' => 6
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Канады',
            'title_track' => 'Автодром имени Жиля Вильнёва',
            'img' => 'https://top-racing.tv/uploads/images/86f8c7bd47e461ffb02966b3a77c430a_1684841227.png',
            'country_id' => 7
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Австрии',
            'title_track' => 'Ред Булл Ринг',
            'img' => 'https://top-racing.tv/uploads/images/08486d243b8601d9a3efe29d5a80cc2a_1684762917.png',
            'country_id' => 8
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Великобритании',
            'title_track' => 'Силверстон',
            'img' => 'https://top-racing.tv/uploads/images/c7d3694f71f48144c547ed57c7d73d98_1684842802.png',
            'country_id' => 9
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Венгрии',
            'title_track' => 'Хунгароринг',
            'img' => 'https://top-racing.tv/uploads/images/45461e1b66d08dc484b51cdfbe37f1fb_1684841489.png',
            'country_id' => 10
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Бельгии',
            'title_track' => 'Спа-Франкоршам',
            'img' => 'https://top-racing.tv/uploads/images/f0d87e25b1600fc3fc106f7cc246e3e1_1684841647.png',
            'country_id' => 11
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Нидерландов',
            'title_track' => 'Зандворт',
            'img' => 'https://top-racing.tv/uploads/images/91cc9251c093d1f2160eddb3aa51c693_1684763501.png',
            'country_id' => 12
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Италии',
            'title_track' => 'Монца',
            'img' => 'https://top-racing.tv/uploads/images/04d2995e79d864e0cd14291805d8216e_1684841144.png',
            'country_id' => 13
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Сингапура',
            'title_track' => 'Марина Бей',
            'img' => 'https://top-racing.tv/uploads/images/8fc0f4aca353da35d1f61ab7d837f1cd_1684763656.png',
            'country_id' => 14
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Японии',
            'title_track' => 'Сузука',
            'img' => 'https://top-racing.tv/uploads/images/64eff5cfb68dc1234c601b6780cc40d4_1684842151.png',
            'country_id' => 15
        ]);
        GrandPrix::create([
            'title' => 'Гран-при США',
            'title_track' => 'Трасса Америки',
            'img' => 'https://top-racing.tv/uploads/images/015729ab7d0d0850480d5d9ae5e4122f_1684842663.png',
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Бразилии',
            'title_track' => 'Интерлагос',
            'img' => 'https://top-racing.tv/uploads/images/9cea7f16831a6a26b535378557a32abd_1684842946.png',
            'country_id' => 19
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Мексики',
            'title_track' => 'Автодром имени братьев Родригес',
            'img' => 'https://top-racing.tv/uploads/images/5c5d93654967911aa880b823b7aaab2f_1684841333.png',
            'country_id' => 18
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Абу-Даби',
            'title_track' => 'Яc Марина',
            'img' => 'https://top-racing.tv/uploads/images/88bc48eeff528c0e0481104543783a82_1684841559.png',
            'country_id' => 20
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Лас-Вегаса',
            'title_track' => 'Лас-Вегас',
            'img' => 'https://top-racing.tv/uploads/images/06912808ad1c755e4f776fb4895b4c23_1684843169.png',
            'country_id' => 17
        ]);
        GrandPrix::create([
            'title' => 'Гран-при Катара',
            'title_track' => 'Международный автодром Лусаил',
            'img' => 'https://top-racing.tv/uploads/images/bfbf729f22055ee45f62343e92156028_1684842005.png',
            'country_id' => 16
        ]);
    }
}
