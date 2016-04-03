<?php

use CodeExperts\Provider\MediumSdkServiceProvider;
use Pimple\Container;
use JonathanTorres\MediumSdk\Medium;

class MediumSdkServiceProviderTest extends \PHPUnit_Framework_Testcase
{
	public function testRegister()
	{
		$container = new Container();
		$container->register(new MediumSdkServiceProvider(), ['medium.credentials' => 'you-medium-api-key-here']);

		$this->assertInstanceOf('JonathanTorres\MediumSdk\Medium', $container['medium']);
	}
}