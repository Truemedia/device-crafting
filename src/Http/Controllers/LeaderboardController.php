<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;

class LeaderboardController extends Controller
{
	public function index()
    {
		$battles = [
			0 => [
				
			]
		]; // TODO: Replace placeholder data
        $this->setContent( compact('battles') );
    }
}
