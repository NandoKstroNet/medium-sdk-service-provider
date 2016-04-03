<?php

use CodeExperts\Provider\MediumServiceProvider;
use Pimple\Container;
use JonathanTorres\MediumSdk\Medium;

class MediumServiceProviderTest extends \PHPUnit_Framework_Testcase
{
	public function testRegister()
	{
		$container = new Container();
		$container->register(new MediumServiceProvider(), ['medium.credentials' => 'you-medium-api-key-here']);

		$this->assertInstanceOf('JonathanTorres\MediumSdk\Medium', $container['medium']);
	}
}