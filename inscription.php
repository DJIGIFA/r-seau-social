<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="assets/css/bootstrap.min.css" />
    <link href="assets/js/jquery-3.6.0.min.js" />
    <link href="assets/js/bootstrap.bundle.js" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 
    
</head>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RESEAU SOCIAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color:white;" >Connection</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
    
<div class="container bg-dark mt-4">
<form action="" >
  <fieldset>
    <legend class="text-center" >INSCRIPTION</legend>

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom *</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" autocomplete="off" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Prénom *</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prénom" autocomplete="off" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Numéro *</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votre numero" autocomplete="off" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password *</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Confirmer Password *</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer Password" required>
      
    </div>


    <div class="container text-center mt-3">

        <input class="btn bg-white " type="submit" name="envoyer" value="Enovyer" /> <br>
        <a href="connection.php"><small>Vous avez un compte ? </small></a>
    </div>

</form>
</div>

</body>

</html>



<style>
    .navbar-brand{
        color:white;
    }
    .navbar-brand:hover{
        color:white;
    }

    form
    {
        color:white;
    }

    small{
        color:white;
    }

</style>