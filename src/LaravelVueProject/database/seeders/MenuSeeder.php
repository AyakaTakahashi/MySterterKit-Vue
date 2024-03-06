<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['menu' => 'カット', 'charge' => 1000]);
        Menu::create(['menu' => 'カラー', 'charge' => 2000]);
        Menu::create(['menu' => 'パーマ', 'charge' => 3000]);
        Menu::create(['menu' => 'トリートメント', 'charge' => 4000]);
        Menu::create(['menu' => 'ハイライト', 'charge' => 5000]);
    }
}
