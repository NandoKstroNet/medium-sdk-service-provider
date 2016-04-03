<?php 
namespace CodeExperts\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use JonathanTorres\MediumSdk\Medium;

class MediumServiceProvider implements ServiceProviderInterface
{
	/**
	 * Register the Medium API SDK Service
	 * @param  Container $container
	 * @return JonathanTorres\MediumSdk\Medium
	 */
	public function register(Container $container)
	{
		$container['medium'] = $container->factory(function() use($container){

			$medium = new Medium($container['medium.credentials']);

			return $medium;
		});
	}
}