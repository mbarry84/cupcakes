<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 6Jan//19
	 */

	//Turn on error reporting
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//access the session before ANY HTML
	session_start();

	//Initialize variables
	$fname = "";
	$lname = "";
	$cupcakeFlavor = "";

	print_r($_POST);
	//If form is submitted, process the data
	if (!empty($_POST))
	{
		//Make sure that first and last name are not blank.
		$isValid = true;
		if (empty($_POST['fname']))
		{
			echo "<p>Please provide a first name</p>";
			$isValid = false;
		}
		else
			{
			$fname = $_POST['fname'];
		}

		if (empty($_POST['lname']))
		{
			echo "<p>Please provide a last name</p>";
			$isValid = false;
		}
		else
		{
			$lname = $_POST['lname'];
		}



		if(!empty($_POST['cupcake']))
		{
			$cupcakeFlavor = $_POST['cupcake'];
			$flavorString = implode(", ", $cupcakeFlavor);
			echo "<p>$flavorString</p>";

		}
		else
		{
			echo "<p>Please select a flavor of Cupcake</p>";
			$isValid = false;
		}
	}


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

<form method="POST" action="index.php">

	<!--Name-->
	<fieldset>

		<legend>Who is this order for:</legend>

		<label>First Name:&nbsp;
			<input type="text" size="20" maxlength="20" name="fname" id="fname" value='<?php echo $fname; ?>'>
		</label>

		<label>Last Name:&nbsp;
			<input type="text" size="20" maxlength="20" name="lname" id="lname" value='<?php echo $lname; ?>'>
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
	            echo "<label><input type='checkbox' value=".$item."name='cupcake[]'> $item_value </label><br>";
            }
		?>

	</fieldset>

	<input type="submit" value="Submit your order">
</form>

</body>
</html>
