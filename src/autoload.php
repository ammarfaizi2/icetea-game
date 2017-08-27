<?php
define("APP_ROOT_DIR", realpath(__DIR__."/.."));
define("PUBLIC_DIR", realpath(__DIR__."/../public"));
define("STORAGE_DIR", realpath(__DIR__."/../storage"));

require APP_ROOT_DIR."/config.php";

/**
 * Scope isolated.
 */
function load_class_aaa($class)
{
	require __DIR__."/Handler/".str_replace("\\", "/", $class).".php";
}

/**
 * Register autoload.
 */
spl_autoload_register("load_class_aaa");