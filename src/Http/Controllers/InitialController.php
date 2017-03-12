<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use App\Http\Controllers\Controller;

class InitialController extends Controller
{
	public function index()
    {
        return view('devicecrafting::index');
    }
}
