<?php

trait Singleton
{
	protected static $_instance;

	public static function getInstance(): self
	{
		if (self::$_instance === null) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	private function __construct(){}
	private function __wakeup() {}
	private function __clone() {}
}