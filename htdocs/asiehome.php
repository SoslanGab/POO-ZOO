<?php include 'linksscripts.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: Arial, sans-serif;
    }
    .history-section {
   
      padding: 100px 0;
    }
    .history-heading {
      font-size: 2rem;
      margin-bottom: 30px;
    }
    .history-content {
      font-size: 1.2rem;
      line-height: 1.6;
    }
    .history-image {
      max-width: 100%;
      height: auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
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
<section class="container history-section">
  <div class="row">
    <div class="col-md-12">
      <h2 class="history-heading text-center">L'histoire des Panda</h2>
      <p class="history-content">Le panda géant appartient à l'ordre des carnivores. Leur plus vieil ancêtre, le carnivore Creodont, vivait au Paléocène (début de l'ère Tertiaire) il y a 60 millions d'années. Miacis, le descendant direct de Creodont, a vécu durant le Paléocène et l'Eocène et a divergé ensuite en deux branches.</p>
      <p class="history-content">Une branche, les Feloidea, consiste aux mammifères modernes proches des chats (dont les Viverridae, Herpestidae, Felidae et Hyaenidae). L'autre branche, les Cynoidea, consiste aux mammifères modernes proches des ours (dont les Canidae, les Ursidae, les Ailuridae, les Ailuropodidae et les Mustelidae).</p>
      <p class="history-content">Le plus ancien ancêtre connu du panda géant est Ailurarctos (un Ailuropodidae donc descendant des Cynoidea), il vivait il y a 8 millions d’années environ (fin du Miocène). Les fossiles ont révélé qu’Ailurarctos vivait près des marais et ne se nourrissait pas entièrement de bambous. C’est seulement parce que le grand panda s’est retiré dans un environnement écologique unique dans la dernière phase de son évolution qu’il a commencé à se nourrir principalement de bambous, abondants, pour éviter des compétiteurs alimentaires.</p>
    </div>
    <div class="col-md-12 text-center">
      <img src="https://www.panda.fr/images/panda11121.jpg" alt="Image d'histoire" class="img-fluid history-image">
    </div>
  </div>
</section>

</body>
</html>

