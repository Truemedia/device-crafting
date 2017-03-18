<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\{Battle,Robot};

class LeaderboardController extends Controller
{
	public function index()
    {
		$pagination = config('devicecrafting.pagination');
		$battles = Battle::all()->take($pagination['battles']);
		$robots = Robot::all()->take($pagination['robots']);

        $this->setContent( compact('battles', 'robots') );
    }
}
