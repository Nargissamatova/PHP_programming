<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php

		/*  Step1: Make a form that submits one value to POST super global


 */
if (isset($_POST[$value])) {
  echo '<h2>Form has been submitted<h2/>';
}

		?>
<form action="" method="post">
  <input type="text" name="value">
  <input type="submit">
</form>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>