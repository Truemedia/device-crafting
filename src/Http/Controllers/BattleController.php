<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\{Battle,Robot};

class BattleController extends Controller
{
    /**
      * Choose the conditions of a battle
      */
	public function choose()
    {
        $friendlyRobots = Robot::where('owner_id', \Auth::user()->id)->get();
		$opposingRobots = (Robot::count() > $friendlyRobots->count()) ? Robot::all()->except( $friendlyRobots->pluck('id') ) : null;

		$content = compact('friendlyRobots', 'opposingRobots');
		dd($content); // TODO: Send as JSON instead of debugging
    }

    /**
      * Engage in battle
      */
    public function engage()
    {

    }
}
