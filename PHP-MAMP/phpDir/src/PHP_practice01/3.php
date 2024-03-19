<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
// task 1
if (false) {
}elseif (true) {
	echo 'I love PHP <br/>';
}
// task 2
for ($i=1; $i <= 10 ; $i++) { 
echo $i . '<br/>';
}
// task 3
$temperature = 5;
$result = '';
switch ($temperature) {
	case 6:
		$result = 'it s 6, fine';
		break;
	case 10:
		$result = 'it s 10, pretty warm';
		break;
	case 15:
		$result = 'it s 15, woo warm';
		break;
	case 20:
		$result = 'it s 20, warm';
		break;
	case 30:
		$result = 'it s 30, so warm';
		break;
	default:
		break;
};
echo $result;
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>