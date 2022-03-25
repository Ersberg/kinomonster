<?php

try {
	$pdo = new PDO('mysql:dbname=kinomonstr; host=127.0.0.1', 'mysql', 'mysql');
} catch (PDOException $e) {
	die($e->getMessage());
}
