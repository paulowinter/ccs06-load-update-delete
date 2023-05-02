<?php

require "config.php";

use App\myPets;

// Remove Student record, and automatically redirect to index

try {
	$id = $_GET['id'];
	$result = myPets::deleteById($id);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

