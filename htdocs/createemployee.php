<?php 
include 'linksscripts.php'; 
require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/autoload.php';

$employeManager = new EmployeManager($db);




if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])) {

    $name = $_POST['name'];
    $age = intval($_POST['age']);
    $gender = $_POST['gender'];
  
    $result = $employeManager->addEmploye($name, $age, $gender);
    
    if($result) {
      echo "Employé ajouté"; 
    }
  }
?>

<body class="green-bg">
    <div class="container mt-5">
        <h2>Ajouter un employé</h2>
        <form  method="post">

            <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group"> 
            <label for="age">Âge:</label>
            <input type="number" class="form-control" id="age" name="age">
            </div>

            <div class="form-group">
            <label for="gender">Genre:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>  
            </select>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</body>