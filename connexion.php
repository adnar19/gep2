<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>connexion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">


  </head>
  <body>


    <!-- <nav class="navbar navbar-expand-lg  ">
      <a class="navbar-brand">school</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link " href="nav-bar.html">presentation </a>
          <a class="nav-item nav-link" href="nav-bar.html">programs</a>
          <a class="nav-item nav-link" href="nav-bar.html">Pricing</a>
          <a class="nav-item nav-link" href="nav-bar.html" >contact</a>
        </div>
      </div>
    </nav> -->



       <div class="container-fluid bg">



          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
               <div class="col-md-4 col-sm-4 col-xs-12" >

                   <form class="form-container bg-dark" id="loginform">
                     <div class="form-group">
                       <label for="username">Utilisateur</label>
                       <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">

                     </div>
                     <div class="form-group">
                       <label for="password">Mo de passe</label>
                       <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                     </div>


                     <button type="submit" class="btn btn-light btn-block">Connexion</button>
                     <?php
   //                   $command="echo | wmic.exe path win32_computersystemproduct get uuid";
   // $a=shell_exec($command);
   // echo  $a;


                     ?>
                   </form>

               </div>
            <div class="col-md-4 col-sm-4 col-xs-12">

            </div>
          </div>






        </div>



  </body>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js">  </script>
    <script href="js/bootstrap.min.js"></script>
    <script src="js/login.js" charset="utf-8"></script>
</html>
