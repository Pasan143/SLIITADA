<?php

	$botToken = "223653896:AAGfgxzZHjlXuWybPuxJFyJcX3TCK577OA4";
	$website = "https://api.telegram.org/bot".$botToken;

	$update = filr_get_contents($website."/getupdates");

	print_r($update);

?>