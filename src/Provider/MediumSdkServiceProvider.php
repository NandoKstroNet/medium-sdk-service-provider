<?php 
namespace CodeExperts\Provider;

use \Silex\Application;
use \Silex\ServiceProviderInterface;
use JonathanTorres\MediumSdk\Medium;

class MediumSdkServiceProvider implements ServiceProviderInterface
{
	/**
	 * Register the Medium API SDK Service
	 * @param  Application $container
	 * @return JonathanTorres\MediumSdk\Medium
	 */
	public function register(Application $app)
	{
		$app['medium'] = $app->share(function() use($app){

			$medium = new Medium($app['medium.credentials']);

			return $medium;
		});
	}

	public function boot(Application $app)
	{
	}
}