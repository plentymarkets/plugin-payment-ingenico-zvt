<?php

namespace IngenicoZvt\Providers;


use Illuminate\Routing\Router;
use Plenty\Plugin\RouteServiceProvider;

class IngenicoZvtRouteServiceProvider extends RouteServiceProvider
{
	public function map(Router $router)
	{
		$router->get('ingenicoZvt/configuration', [
			'middleware' => 'oauth',
			'uses' => 'IngenicoZvt\Controllers\SettingsController@configuration'
		]);
	}
}