<?php

function db($do)
{
    // DB Info
    $servername = "localhost";
    $username = "root";
    $password = "passwordna";
    $dbname = "dbna";
    // DO Connect
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // customizing PDO
    return $conn->prepare($do);
}
function get($param) {
	if(isset($_GET[$param]))
		return $_GET[$param];
	else
		return FALSE;
}
function post($param) {
	if(isset($_POST[$param]))
		return $_POST[$param];
	else
		return FALSE;
}
