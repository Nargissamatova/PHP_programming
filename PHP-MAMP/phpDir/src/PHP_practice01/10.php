<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

    Step 6: Call the method ShowAll
		
	*/

  class Dog{
    // properties
    public $eyeColor;
    public $nose;
    public $furColor;

    // methods
    function ShowAll(){
      echo 'Eye color: ' . $this->eyeColor . '<br/>';
      echo 'Nose: ' . $this->nose . '<br/>';
      echo 'Fur color: ' . $this->furColor . '<br/>';

    }
  }
  $husky = new Dog();
  $husky->eyeColor = 'Blue';
  $husky->nose = 'Pink';
  $husky->furColor = 'Grey';
  $husky->ShowAll()

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>
  
  <!--
    public function __construct($eyeColor, $nose, $furColor)
  {
    $this->eye_color = $eye_color;
    $this->nose = $nose;
    $this->fur_color = $fur_color;
  }

  public function ShowAll()
  {
    echo "Eye Color: $this->eye_color, Nose: $this->nose, Fur Color: $this->fur_color";
  }
  -->

  <!--
 class Dog {
    public $eye_color;
    public $nose;
    public $fur_color;
    public function __construct($eye_color, $nose, $fur_color)
    {
        echo $this->$eye_color = $eye_color . '<br>';
        echo $this->$nose = $nose . '<br>';
        echo $this->$fur_color = $fur_color . '<br>';
    }

}
$shaperd = new Dog('black', 'black', 'brown');
-->