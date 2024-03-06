<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sex::create([
            'sex' => '男性',
        ]);
        Sex::create([
            'sex' => '女性',
        ]);
        Sex::create([
            'sex' => 'その他',
        ]);
    }
}
