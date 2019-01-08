<?php
	/**
	 * Created by PhpStorm.
	 * User: matthewbarry
	 * Date: 6Jan//19
     *
     * http://mbarry.greenriverdev.com/328/cupcakes/index.php
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

	//flavors to pick from
	$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
		"carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake",
		"velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");


	//If form is submitted, process the data
	if (!empty($_POST))
	{
		//Make sure that first name is not blank.
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

		//Make sure that last name is not blank.
		if (empty($_POST['lname']))
		{
			echo "<p>Please provide a last name</p>";
			$isValid = false;
		}
		else
		{
			$lname = $_POST['lname'];
		}

        //Make sure the cupcake flavor has been chosen
		if (isset($_POST['cupcake']))
        {
	        $cupcakeFlavor = $_POST['cupcake'];

	        //check to make sure cupcake flavor is a valid flavor
	        foreach($cupcakeFlavor as $key => $value)
	        {
	            if (!array_key_exists($value, $flavors))
                {
	                echo "<p>Please select a flavor of Cupcake</p>";
	                $isValid = false;
                }
	        }

	        $flavorString = implode(", ", $cupcakeFlavor);
        }
        else
        {
	        echo "<p>Please select a flavor of Cupcake</p>";
	        $isValid = false;
        }

        //Display name and flavors if form filled out
		if ($isValid)
        {
            //total for number of items ordered $3.50 per cupcake
            $total = 3.5*(count($cupcakeFlavor));

            //ensure there are 2 decimal places
	        $total = number_format($total, 2);

	        echo "<p>Thank you, $fname, for your order!</p>";
	        echo "<p>Order Summary: ";

                //display the flavors ordered
                foreach ($cupcakeFlavor as $values)
                {
                    echo "<li>$values</li>";
                }
	        echo " </p>";//end order summary

	        echo "<p>Order Total: $$total</p>";
	        exit;
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

<form method="POST" action="">

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


            //Display flavors on the form
            foreach($flavors as $item => $item_value)
            {
	            echo "<label><input type='checkbox' value=".$item." name='cupcake[]'>$item_value </label><br>";
            }
		?>

	</fieldset>

	<input type="submit" value="Submit your order">
</form>

</body>
</html>
