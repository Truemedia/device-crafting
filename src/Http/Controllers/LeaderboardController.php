<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\Robot;

class LeaderboardController extends Controller
{
	public function index()
    {
		$battlesPerSection = 5;
		$playersPerSection = 10;

		// TODO: Replace placeholder data
		$battles = [
			0 => [

			]
		];
		$players = Robot::all()->take($playersPerSection);
        $this->setContent( compact(
			'battles', 'players', 'battlesPerSection', 'playersPerSection'
		));
    }
}
