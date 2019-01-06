<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 6Jan//19
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

		<?php
			//define list of potential certs
            $flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
	                            "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake",
	                            "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

            foreach($flavors as $item => $item_value)
            {
	            echo "<label><input type='checkbox' value=".$item."name='cupcake[]git'> $item_value </label><br>";
            }
		?>

	</fieldset>

	<input type="submit" value="Submit your order">
</form>

</body>
</html>
