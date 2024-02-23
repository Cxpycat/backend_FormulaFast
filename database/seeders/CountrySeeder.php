<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(
            [
                'title' => 'Бахрейн',
                'title_short' => 'bh',
                'img' => 'images/flags/bh.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Саудовская Аравия',
                'title_short' => 'sa',
                'img' => 'images/flags/sa.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Австралия',
                'title_short' => 'au',
                'img' => 'images/flags/au.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Азербайджан',
                'title_short' => 'az',
                'img' => 'images/flags/az.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Монако',
                'title_short' => 'mc',
                'img' => 'images/flags/mc.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Испания',
                'title_short' => 'es',
                'img' => 'images/flags/es.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Канада',
                'title_short' => 'ca',
                'img' => 'images/flags/ca.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Австрия',
                'title_short' => 'at',
                'img' => 'images/flags/at.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Великобритания',
                'title_short' => 'gb',
                'img' => 'images/flags/gb.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Венгрия',
                'title_short' => 'hu',
                'img' => 'images/flags/hu.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Бельгия',
                'title_short' => 'be',
                'img' => 'images/flags/be.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Нидерланды',
                'title_short' => 'nl',
                'img' => 'images/flags/nl.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Италия',
                'title_short' => 'it',
                'img' => 'images/flags/it.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Сингапур',
                'title_short' => 'sg',
                'img' => 'images/flags/sg.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Япония',
                'title_short' => 'jp',
                'img' => 'images/flags/jp.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Катар',
                'title_short' => 'qa',
                'img' => 'images/flags/qa.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'США',
                'title_short' => 'us',
                'img' => 'images/flags/us.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Мексика',
                'title_short' => 'mx',
                'img' => 'images/flags/mx.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Бразилия',
                'title_short' => 'br',
                'img' => 'images/flags/br.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Абу-Даби',
                'title_short' => 'ae',
                'img' => 'images/flags/ae.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Швейцария',
                'title_short' => 'ch',
                'img' => 'images/flags/ch.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Франция',
                'title_short' => 'fr',
                'img' => 'images/flags/fr.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Германия',
                'title_short' => 'de',
                'img' => 'images/flags/de.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Финляндия',
                'title_short' => 'fi',
                'img' => 'images/flags/fi.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Тайланд',
                'title_short' => 'th',
                'img' => 'images/flags/th.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Дания',
                'title_short' => 'dk',
                'img' => 'images/flags/dk.jpg'
            ]
        );
        Country::create(
            [
                'title' => 'Китай',
                'title_short' => 'cn',
                'img' => 'images/flags/cn.jpg'
            ]
        );
    }
}
