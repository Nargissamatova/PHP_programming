<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo 'Floor: ' . floor(6.704) . '<br/>';
echo strtoupper('This is uppercase string') . '<br/>';
echo var_dump(array_reverse([1,2,3,4]))	
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>