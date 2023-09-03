<?php
  include 'linksscripts.php';

  
  require_once __DIR__ . '/config/db.php';
  require_once __DIR__ . '/config/autoload.php';

  $animalsManager = new AnimalsManager($db);
  $animals = $animalsManager->findAnimals();

// var_dump ( $animals);
?>


<!DOCTYPE html>
<html class="no-js" lang="en"> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Zoo</title>
    <meta name="description" content="Zoo Atlanta">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/min/script-min.js"></script>
  </head>

  
<body class="green2-bg">
<?php foreach ($animals as $animal) { ?>
  <section class="animal-wrap">
    <div class="container clearfix">
      <h1><?=$animal->getName()?></h1>
      <div class="hero banner">
        <div class="thought-wrap">
          <div href="#self" class="thought pulse" onclick="panda2.playclip()">
            <figure><img src="assets/imgs/panda2.png" alt="">
             <p class="mt-1 text-dark">État de santé : <?=$animal->getHealth_point()?>%</p>
              <figcaption>Guerrir</figcaption>
            </figure>
          </div>
        <div class="thought-wrap">
          <div href="#self" class="thought floating" onclick="panda1.playclip()">
            <figure><img src="assets/imgs/panda1.png" alt="">
            
              <figcaption>Nourrir</figcaption>
              <p class=" mt-1 text-dark">Niveau de faim : <?=$animal->getHunger()?>%</p>  
            </figure>
          </div>
           <img src="assets/imgs/panda.png" alt="" class="animal fadeIn">
          <div href="#self" onclick="panda4.playclip()" class="thought floating">
            <figure><img src="assets/imgs/home-icon.png" alt="">
            <a href="asiehome.php"><figcaption>MY Home</figcaption></a>
            </figure>
          </div>

        </div>
      </div>
      <a href="main-animal.html"><img src="assets/imgs/arrow.png" alt="" class="arrow"></a>
    </div>
  </section>
  <?php
    // Appelle la méthode pour diminuer la santé et augmenter la faim
    $animalsManager->decreaseHealthAndHunger(2, 1);
  ?>
<?php } ?>





  <section class="animal-wrap">
    <div class="container clearfix">
      <h1>Tigre</h1>
      <div class="hero banner orange">

        <div class="thought-wrap">
          <div href="#self" class="thought pulse" onclick="tiger2.playclip()">
            <figure><img src="assets/imgs/tiger2.png" alt="">
              <figcaption>Guerrir</figcaption>
            </figure>
          </div>

          <div href="#self" class="thought pulse"  onclick="tiger3.playclip()">
            <figure><img src="assets/imgs/tiger3.png" alt="">
              <figcaption>Nettoyer</figcaption>
            </figure>
          </div>
        </div>

        <div class="thought-wrap">
          <div href="#self" class="thought floating" onclick="tiger1.playclip()">
            <figure><img src="assets/imgs/tiger1.png" alt="">
              <figcaption>Nourrir</figcaption>
            </figure>
          </div>
           <img src="assets/imgs/tiger.png" alt="" class="animal fadeIn">
          <div href="#self" onclick="tiger4.playclip()" class="thought floating">
            <figure><img src="assets/imgs/home-icon.png" alt="">
              <figcaption>My Second Home</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

  
</body>
</html>