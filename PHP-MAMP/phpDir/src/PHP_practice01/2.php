<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */
// task 1
$number1 = 10;
$number2 = 20;
// task 2
echo 'The sum is: ' . $number1 + $number2;
// task 3
$array = [$number1, $number2];
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);


		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>