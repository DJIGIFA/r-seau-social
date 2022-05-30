<?php 
    session_start();
    if(!isset($_SESSION['connecter']))
    {
        header('Location:connection.php') ;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membres</title>


    <link href="assets/css/monstyle.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/monjs.js"></script>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">RESEAU SOCIAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
      
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="membres.php">Les membres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="invitations.php">Les Invitations</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="amies.php">Mes Amies</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="connection.php">Connection</a>
        </li>
    
      </ul>
      
    </div>

  </div>
</nav>



</body>


</html>

