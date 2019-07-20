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
.table tr.active td {background: #b2ebf2 !important }


		</style>

    <title> Tableau de bord </title>
  </head>
  <body>

<?php
$recherche = false;

include 'navbar.php';
 ?>



<div class="sidebar" style="background-color:#eceff1">
  <input type="text" id="search" oninput="Actualiser()" placeholder="recherche..." class="form-control form-control-sm" name="" value="">
<hr>
<h1 align="center" id="count">0</h1>
<hr>
<select class="form-control" name="">
<option value="">Tous les groupes</option>
<option value="">groupe 1</option>
<option value="">groupe 2</option>
</select>
<hr>
<select class="form-control" name="annee">
<option value="">Toutes les annees</option>
<option value=""> 1</option>
<option value=""> 2</option>
</select>
<hr>
<button class="btn btn-block btn-success btn-sm" type="button" name="Ajouter" onclick="Ajouter()"><i class="fa fa-plus"></i></button>
<button class="btn btn-block btn-warning btn-sm" type="button" name="Modifier" onclick="EditActive()"><i class="fa fa-edit"></i></button>
<button class="btn btn-block btn-danger btn-sm" type="button" name="Supprimer" onclick="supprimer()"><i class="fa fa-trash"></i></button>




</div>

<div class="container-fluid" style="padding-left:250px;padding-top:15px">


<table class="table table-bordered table-stripped " >
<thead class="bg-success">
  <tr>
    <th>N</th>
    <th>NOM</th>
    <th>PRENOM</th>

    <th>TEL</th>

  </tr>
</thead>
<tbody id="res" style="background-color:#a5d6a7">

</tbody>

</table>


</div>








  </body>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/e_liste.js"></script>
</html>
