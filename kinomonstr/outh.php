<?php
	session_start();
	unset($_SESSION["login"]);
	session_destroy();
	header ("Location: ".$_SERVER["HTTP_REFERER"]);
	exit;

?>