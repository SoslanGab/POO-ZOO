<?php
 include 'linksscripts.php';

 
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/autoload.php';
$animalsManager = new AnimalsManager($db);
  $animals = $AnimalsManager->findAnimals();


?>

<body class="green2-bg">
<?php foreach ($animals as $animals) { ?>
  <section class="animal-wrap">
    <div class="container clearfix">
      <h1><?=$animals->getName()?></h1>
      <div class="hero banner">
        <div class="thought-wrap">
          <div href="#self" class="thought pulse" onclick="panda2.playclip()">
            <figure><img src="assets/imgs/panda2.png" alt="">
              <figcaption>Guerrir</figcaption>
            </figure>
          </div>

          <div href="#self" class="thought pulse"  onclick="panda3.playclip()">
            <figure><img src="assets/imgs/monkey3.png" alt="">
              <figcaption>Nettoyer</figcaption>
            </figure>
          </div>
        </div>

        <div class="thought-wrap">
          <div href="#self" class="thought floating" onclick="panda1.playclip()">
            <figure><img src="assets/imgs/panda1.png" alt="">
              <figcaption>Nourrir</figcaption>
            </figure>
          </div>
           <img src="assets/imgs/panda.png" alt="" class="animal fadeIn">
          <div href="#self" onclick="panda4.playclip()" class="thought floating">
            <figure><img src="assets/imgs/home-icon.png" alt="">
              <figcaption>My Second Home</figcaption>
            </figure>
          </div>

        </div>
      </div>
      <a href="main-animal.html"><img src="assets/imgs/arrow.png" alt="" class="arrow"></a>
    </div>
  </section>
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