<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>


    <link href="assets/css/monstyle.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/monjs.js"></script>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RESEAU SOCIAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
      
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Les membres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Les Invitations</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Mes Amies</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Connection</a>
        </li>
    
      </ul>
      
    </div>

  </div>
</nav>




</head>
<body>
    <div class="container mt-4 pb-4">
    <form>
  <fieldset>
    <legend class="text-center" >Connection</legend>


    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Numéro *</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre numero" autocomplete="off" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password *</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      
    </div>

   

    <div class="container text-center mt-3">

        <input class="btn btn-lg btn-primary " type="submit" name="se_connection" value="Se connecter" /> <br>
        <a href="inscription.php"><small>Créer un compte  </small></a>
    </div>

</form>
    </div>
</body>


</html>
