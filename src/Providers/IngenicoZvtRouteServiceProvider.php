<?php
/**
 * author: ninoplettenberg
 */
namespace IngenicoZvt\Providers;


use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\RouteServiceProvider;

class IngenicoZvtRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('ingenicozvt/configuration', [
			'middleware' => 'oauth',
			'uses' => 'IngenicoZvt\Controllers\SettingsController@configuration'
		]);
	}
}