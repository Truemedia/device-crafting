<?php namespace Wadepenistone\Devicecrafting\Http\Controllers\Resources;

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

	public function create()
	{
		
	}

	public function store(Request $request)
	{

	}

	public function edit($id)
	{

	}

	public function update(Request $request, $id)
	{

	}

	public function destroy($id)
	{

	}
}
