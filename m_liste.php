<?php
include 'v.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/font-awesome.min.css" >
    <link rel="stylesheet" href="css/admin.css">

		<style media="screen">

		</style>

    <title> LISTE DES MATIERES</title>
  </head>
  <body>

<?php
$recherche = false;

include 'navbar.php';
 ?>



<div class="sidebar">
  <input type="text" id="search" oninput="Actualiser()" placeholder="recherche..." class="form-control form-control-sm" name="" value="">
<hr>
<h1 align="center" id="count">0</h1>
<hr>

<button class="btn btn-block btn-success btn-sm" type="button" name="Ajouter" onclick="Ajouter()">Ajouter</button>

</div>

<div class="container-fluid" style="padding-left:250px;padding-top:15px">


<table class="table table-bordered table-striped">
<thead>
  <tr>
    <th>N</th>
    <th>Nom</th>
    <th>Action</th>
  </tr>
</thead>
<tbody id="res">

</tbody>

</table>


</div>








  </body>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/m_liste.js"></script>
</html>
