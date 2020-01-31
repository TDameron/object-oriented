<?php
use Tdameron1\ObjectOriented\Author;

require_once(dirname(__DIR__, 1) . "/Classes/autoload.php");

$hash = password_hash ( "password" , PASSWORD_ARGON2I,(["time_cost"=> 7]));

	$corMac = new Author("f11c65a0-4a0a-4e6a-9281-15d544614f8d", "1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a1a","www.example90000.com","CormacMcarthy@BloodMeridianMail.com",'$argon2i$v=19$m=1024,t=384,p=2$dE55dm5kRm9DTEYxNFlFUA$nNEMItrDUtwnDhZ41nwVm7ncBLrJzjh5mGIjj8RlzVA', "cMcarthy");


	var_dump($corMac);