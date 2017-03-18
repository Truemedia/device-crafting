<?php namespace Wadepenistone\Devicecrafting\Http\Controllers\Extendable;

use Illuminate\Routing\Controller as Controller;

class CoreController extends Controller
{
	protected $packageName = 'devicecrafting'; // TODO: Work this out automatically
	protected $layout = 'devicecrafting::layouts.theme.layout';

    /**
	 * Wrap calls to automatically return content
	 */
	public function callAction($method, $parameters)
    {
		// Helper
		$className = get_class($this);

		// Setup controller prerequisites
        $this->setupLayout();
		$this->setupTitle($method, $className);
        $this->setupViewPath();

		// Handle response
        $response = call_user_func_array([$this, $method], $parameters);
        if (is_null($response) && !is_null($this->layout)) {
            $response = $this->layout;
        }
        return $response;
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout)) {
			$this->layout = view($this->layout);
		}
	}

	/**
	 * Dynamically set name of view based on route name
	 *
	 * @return void
	 */
	protected function setupViewPath()
	{
		list($packageName, $routeName) = [$this->packageName, \Request::route()->getName()];
		$this->view = "${packageName}::pages.$routeName";
	}

	/**
	 * Setup page title
	 *
	 */
	protected function setupTitle($method, $class)
	{
		$resource = ucwords( str_replace('Controller', '', class_basename($class)) );
		$this->layout->title = implode(' - ', [$resource, $method, $this->packageName]);
	}

	/**
	 * Set page content
	 *
	 * @param array
	 * @param string
	 * @return void
	 */
	protected function setContent($data, $settings = array())
	{
		// Handle request
		switch (\Request::format())
		{
			case 'json':
				return Response::json($data); // API
			break;

			case 'html':
				if (!empty($settings) && array_key_exists('view', $settings)) {
					$view = $settings['view'];
				} else {
					$view = $this->view;
				}

				if ($data == null) { $data = []; }

				$this->layout->content = view($view, $data); // HTML
				$this->layout->content->title = $this->layout->title;
			break;
		}
	}
}
