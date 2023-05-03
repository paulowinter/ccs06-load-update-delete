<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Richard', 'Male', '01/26/2003', 'Guy', 'richard@feynman.com', 'sunset', '09210829153');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Albert',
			'gender' => 'Male',
			'birthdate' => '01/26/2003',
			'owner' => 'Guy',
			'email' => 'Guy@einstein.com',
			'address' => 'Sunset',
			'contact_number' => '09210829153'
		],
		[
			'name' => 'Poopoo',
			'gender' => 'Female',
			'birthdate' => '06/27/2003',
			'owner' => 'Girl',
			'email' => 'Girl@power.com',
			'address' => 'Porac',
			'contact_number' => '09310929153'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

