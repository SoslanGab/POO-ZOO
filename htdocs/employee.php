
<?php 

include 'linksscripts.php';


require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/autoload.php';

$employeManager = new EmployeManager($db);
$employes = $employeManager->findEmploye();


?>

  <body class="green-bg">
  <navbar class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mon Zoo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="map.php">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="createemployee.php">Crée Employés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">Employés</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </navbar>
    <div class="container">
      <div class="row ">
        <?php foreach ($employes as $employes) { ?>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?=$employes->getName()?></h5>
                <p class="card-text">Age: <?=$employes->getAge()?></p>
                <p class="card-text">Genre: <?=$employes->getGender()?></p>
                <a href="#" class="btn btn-primary">Choisir cet employée</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
   
   



  </body>
