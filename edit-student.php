<?php

require "config.php";

use App\Pets;

$pet_id = $_GET['id'];

$pet = Pets::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pet</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name</label>
		<input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet->getName();?>" />	
	</div>
	<div>
		<label>Gender</label>
		<input type="text" name="gender" placeholder="Gender" value="<?php echo $pet->getGender();?>" />	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" placeholder="Birthdate" value="<?php echo $pet->getBirthdate();?>" />	
	</div>
	<div>
		<label>Owner Name</label>
		<input type="text" name="owner" placeholder="Owner Name" value="<?php echo $pet->getOwner();?>" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />	
	</div>
	<div>
	<div>
		<label>Address</label>
		<input type="address" name="address" placeholder="Address" value="<?php echo $pet->getAddress();?>" />	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>