<?php

namespace System;

class DB
{
	public static function pdo()
	{
		return new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	}

	public static function __callStatic($a, $b)
	{
		return self::pdo()->{$a}(...$b);
	}
}