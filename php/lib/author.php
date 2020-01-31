<?php
use Tdameron1\ObjectOriented\Author;

require_once(dirname(__DIR__, 1) . "/Classes/autoload.php");

$hash = password_hash ( "password" , PASSWORD_ARGON2I (["time_cost"=> 7]));

	$corMac = new Author("f11c65a0-4a0a-4e6a-9281-15d544614f8d", "1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a","https://bootcamp-coders.cnm.edu/class-materials/object-oriented/object-oriented-php.php","CormacMcarthy@BloodMeridianMail.com",$hash, "cMcarthy");


	var_dump($corMac);