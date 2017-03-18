<?php

use Illuminate\Database\Seeder;
use Wadepenistone\Devicecrafting\Models\Battle;

class BattlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Battle::class, 5)->create();
    }
}
