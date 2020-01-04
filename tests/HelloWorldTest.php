<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\HelloWorld;
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
	public function testPrintHelloWorld() {
		$actualClass = new HelloWorld();
        $this->assertEquals('Hello World', $actualClass->printHelloWorld());
	}
}