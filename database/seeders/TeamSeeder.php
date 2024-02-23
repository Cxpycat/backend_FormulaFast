<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO переделать флаги
        Team::create([
            'title' => 'Red Bull',
            'color' => '#0600ef',
            'country_id' => 8
        ]);
        Team::create([
            'title' => 'Mercedes',
            'color' => '#00d2be',
            'country_id' => 23
        ]);
        Team::create([
            'title' => 'Aston Martin',
            'color' => '#006f62',
            'country_id' => 9
        ]);
        Team::create([
            'title' => 'Ferrari',
            'color' => '#dc0000',
            'country_id' => 13
        ]);
        Team::create([
            'title' => 'Alpine',
            'color' => '#0090FF',
            'country_id' => 22
        ]);
        Team::create([
            'title' => 'Haas',
            'color' => '#FFFFFF',
            'country_id' => 17
        ]);
        Team::create([
            'title' => 'Alfa Romeo',
            'color' => '#900000',
            'country_id' => 21
        ]);
        Team::create([
            'title' => 'AlphaTauri',
            'color' => '#2B4562',
            'country_id' => 13
        ]);
        Team::create([
            'title' => 'McLaren',
            'color' => '#ff9800',
            'country_id' => 9
        ]);
        Team::create([
            'title' => 'Williams',
            'color' => '#005AFF',
            'country_id' => 9
        ]);
    }
}
