<?php namespace Wadepenistone\Devicecrafting\Http\Controllers;

use Wadepenistone\Devicecrafting\Http\Controllers\Extendable\CoreController as Controller;

class AccountController extends Controller
{
	protected $layout = 'devicecrafting::layouts.theme.layout';

	public function index()
    {
        $this->setContent(null);
    }
}
