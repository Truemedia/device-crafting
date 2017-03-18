<?php

use Illuminate\Database\Seeder;
use Wadepenistone\Devicecrafting\Models\Robot;

class RobotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Robot::class, 10)->create()->each(function($robot) {
            // TODO: Attach users here

            $robot->save();
        });
    }
}
