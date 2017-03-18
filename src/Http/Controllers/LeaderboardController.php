<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\{Battle,Robot};

class LeaderboardController extends Controller
{
	public function index()
    {
		$battlesPerSection = 5;
		$playersPerSection = 10;

		$battles = Battle::all()->take($battlesPerSection);
		$players = Robot::all()->take($playersPerSection);
        $this->setContent( compact(
			'battles', 'players', 'battlesPerSection', 'playersPerSection'
		));
    }
}
