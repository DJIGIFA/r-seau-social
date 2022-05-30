<?php 
    session_start();

    if(isset($_GET['envoyer']) && isset($_GET['numero']) && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['password']) && isset($_GET['password_confirmation']) )
    {
        $nom = trim( $_GET['nom']) ;
        $prenom = trim( $_GET['prenom']) ;
        $numero = trim( $_GET['numero']) ;

        $password =  $_GET['password'] ;
        $password_confirmation =  $_GET['password_confirmation'] ;

        $hash = password_hash($password,PASSWORD_DEFAULT) ;

        try {
            $db = new PDO("mysql:host=localhost;dbname=reseau_social", 'root', '') ;

            $requette = $db->prepare(" INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `numero`, `password`, `data_naissance`, `sexe`, `ville`) VALUES (NULL, '$nom', '$prenom', '$numero', '$hash', 'now()', '0', 'ville') ") ;

            $requette->execute() ;
            


        } catch (\Throwable $th) {
            //throw $th;
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>


    <link href="assets/css/monstyle.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/monjs.js"></script>

</head>

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
          <a class="nav-link" href="membres.php">Les membres</a>
        </li>
        <li class="nav-item">
        <!-- <span class="badge badge-pill badge-warning">9+</span> -->
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

<body>
    
<div class="container mt-4 mb-5">
<form action="" >
  <fieldset>
    <legend class="text-center" >INSCRIPTION</legend>

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom *</label>
      <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" autocomplete="off" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Prénom *</label>
      <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prénom" autocomplete="off" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Numéro *</label>
      <input type="text" name="numero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre numero" autocomplete="off" required>
      
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password *</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Confirmer Password *</label>
      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirmer Password" required>
      
    </div>


    <div class="container text-center mt-3">

        <input class="btn btn-lg btn-primary " type="submit" name="envoyer" value="S'inscrire" /> <br>
        <a href="connection.php"><small>Vous avez un compte ? </small></a>
    </div>

</form>
</div>

</body>

</html>

