<nav class="navbar navbar-expand-lg navbar-dark" style="background:#78909c">
  <a class="navbar-brand" href="#">GEP 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">tableau de bord <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="e_liste.php">Etudiants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p_liste.php">Profs</a>

      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="m_liste.php">Matières</a>

      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="g_liste.php">Groupes</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscriptions.php">Inscriptions</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="parametres.php"   aria-disabled="true">Parametres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="recette.php"   aria-disabled="true">Recette</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./"   aria-disabled="true">deconnexion</a>
      </li>
    </ul>
    <?php if ($recherche)  {?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php } ?>
  </div>
</nav>
