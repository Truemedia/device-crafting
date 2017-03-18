<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\Robot;

class LeaderboardController extends Controller
{
	public function index()
    {
		// TODO: Replace placeholder data
		$battles = [
			0 => [

			]
		];
		$players = Robot::all()->take(10);
        $this->setContent( compact('battles', 'players') );
    }
}
