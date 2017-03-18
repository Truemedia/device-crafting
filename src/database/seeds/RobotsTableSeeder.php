<?php

use Illuminate\Database\Seeder;
use App\User;
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
        factory(Robot::class, 10)->make()->each(function($robot) {
            $user = User::inRandomOrder()->first();
            $robot['owner_id'] = $user->id;
            $robot->save();
        });
    }
}
