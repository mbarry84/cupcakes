<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 6Jan//19
	 * Time: 10:51
	 */
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CupCakes</title>
	<link rel="stylesheet" href="../css/.css">
</head>
<body>
<h1>
	Welcome to your Cupcake order page
</h1>

<form method="POST" action="">

	<!--Name-->
	<fieldset>

		<legend>Who is this order for:</legend>

		<label>First Name:&nbsp;
			<input type="text" size="20" maxlength="20" name="fname" id="fname" value='First Name'>
		</label>

		<label>Last Name:&nbsp;
			<input type="text" size="20" maxlength="20" name="lname" id="lname" value='Last Name'>
		</label>

	</fieldset>


	<!--Cupcake flavors-->
	<fieldset>

		<legend>Cupcake Flavors</legend>

		<label>
			<input type="checkbox" value="grasshopper" name="cupcake[]">&nbsp;The Grasshopper
		</label><br>

		<label>
			<input type="checkbox" value="maple" name="cupcake[]">&nbsp;Whiskey Maple Bacon
		</label><br>

		<label>
			<input type="checkbox" value="carrot" name="cupcake[]">&nbsp;Carrot Walnut
		</label><br>

		<label>
			<input type="checkbox" value="caramel" name="cupcake[]">&nbsp;Salted Caramel Cupcake
		</label><br>

		<label>
			<input type="checkbox" value="velvet" name="cupcake[]">&nbsp;Red Velvet
		</label><br>

		<label>
			<input type="checkbox" value="lemon" name="cupcake[]">&nbsp;Lemon Drop
		</label><br>

		<label>
			<input type="checkbox" value="tiramisu" name="cupcake[]">&nbsp;Tiramisu
		</label><br>

	</fieldset>

	<input type="submit" value="Submit your order">
</form>

</body>
</html>
