<?php
use Tdameron1\ObjectOriented\Author;

require_once(dirname(__DIR__, ) . "/vendor/autoload.php");

require_once(dirname(__DIR__,  ) . "/Classes/autoload.php");

$hash = $argon2i$v=19$m=1024,t=384,p=2$dE55dm5kRm9DTEYxNFlFUA$nNEMItrDUtwnDhZ41nwVm7ncBLrJzjh5mGIjj8RlzVA;

	$corMac = new Author("f11c65a0-4a0a-4e6a-9281-15d544614f8d", "1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a","https://bootcamp-coders.cnm.edu/class-materials/object-oriented/object-oriented-php.php","CormacMcarthy@BloodMeridianMail.com",$hash, "cMcarthy");