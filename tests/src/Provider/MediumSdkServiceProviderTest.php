<?php

use CodeExperts\Provider\MediumSdkServiceProvider;
use Silex\Application;
use JonathanTorres\MediumSdk\Medium;

class MediumSdkServiceProviderTest extends \PHPUnit_Framework_Testcase
{
	public function testRegister()
	{
		$container = new Application();
		$container->register(new MediumSdkServiceProvider(), ['medium.credentials' => 'you-medium-api-key-here']);

		$this->assertInstanceOf('JonathanTorres\MediumSdk\Medium', $container['medium']);
	}
}