<?php namespace Wadepenistone\Devicecrafting\Http\Controllers\Resources;

use SplFileInfo;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Requests\Request as Request;
use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;
use Wadepenistone\Devicecrafting\Models\Robot;

class RobotController extends Controller
{
	public function index()
	{
        return Robot::all();
	}

	public function store(Request $request)
	{

	}

	public function update(Request $request, $id)
	{

	}

	public function destroy($id)
	{

	}

	/**
	  * Import
	  */
	public function import()
	{
	    // Open file and declare settings
	    $csvPath = storage_path('app/test.csv');
		$fi = new SplFileInfo($csvPath);
	    $file = $fi->openFile();
	    $headers = $keys = [];

        while (!$file->eof()) {
          if (empty($keys)) { // Set keys
            $headers = $keys = $file->fgetcsv();
		} else { // Import record
            $values = array_filter($file->fgetcsv(), function($val) { return !is_null($val); });
            if (!empty($values) && count($values) > 0) {
				if (count($values) != count($keys)) {
				dd( compact('keys', 'values'));

				}
            	$robot = new Robot( array_combine($keys, $values) );
				$robot->owner_id = \Auth::user()->id;
				$robot->save();
            }
          }
        }
	}
}
