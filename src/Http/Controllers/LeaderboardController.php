<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;

class LeaderboardController extends Controller
{
	public function index()
    {
		// TODO: Replace placeholder data
		$battles = [
			0 => [

			]
		];
        $this->setContent( compact('battles') );
    }
}
