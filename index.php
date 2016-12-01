# My first php program
<?php
$authorName = function($name){return $name;};
function get_year(){
$year = date("Y");
return $year;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $authorName("Premnath");?> Website</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/font-awesome.min.css">
  </head>
  <body>
<!--Main header section -->
    <header>
      <img src="./Assets/images/PremLogo.png" alt="site logo">
      <div class="logo">
        <h1><?php echo $authorName("Premnath"); ?></h1>
        <h2>Budding Developer</h2>
      </div>
      <span class="header-right fa fa-angle-down" aria-hidden="true"></span>
      <nav></nav>
    </header>
<!--Main content section -->
    <section class="main">
     Ready to populate
      @latest<br>
    </section>
    <section class="content">
     	Ready to populate
	 @latest
    </section>
<!--Main footer section -->
    <footer>
        <p class="center-element">&copy; <?php echo get_year()." ".$authorName("Premnath");?></p>
    </footer>
<!--javascript goes here -->
  </body>
</html>
