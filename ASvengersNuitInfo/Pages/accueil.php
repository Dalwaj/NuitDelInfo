<?php
  session_start();

  new PDO('mysql:host=webinfo.iutmontp.univ-montp2.fr;dbname=martineze;charset=utf8', 'martineze', '7092021');

  if(isset($_POST['rechercher']) AND !empty($_POST['rechercher'])){
    $reqRechercher = $bdd -> prepare('SELECT * FROM ');
  }
?>
<html>
    <body>
      <?php 
      include 'nav.php';
  ?>
    <!--// en action la page PHP qui recevra la requête-->
<form action="findUser.php" method="get">
  <h3 class="light">Rechercher un sauveteur</h3>
  <div>
    <label class="light">Nom ou prenom :</label>
    <input type="text" placeholder="Ex␣:␣georges" name="motif"
    id="motif" required/>
  </div>
  <button>Chercher</button>
</form>
 <div>
     <label>Trier par :
  </label>
<form action="printUser.php" method="get">
  <button>Alphabétique (croissant)</button>
</form>

<form action="printdescUser.php" method="get">
  <button>Alphabétique (décroissant)</button>
</form>
  </div>

<?php if(isset($_SESSION['id'])){
  echo "<form action=\"addUser.php\" method=\"get\">
  <h3 class=\"light\">Faire une proposition d'ajout</h3>
  <div>
<label for=\"nom\" class=\"light\">Nom</label>
<input type=\"text\" placeholder=\"Nom\" name=\"nom\"
id=\"nom\" required/>
</div>
<div>
<label for=\"prenom\" class=\"light\">Prenom</label>
<input type=\"text\" placeholder=\"Prenom\" name=\"prenom\"
id=\"prenom\" required/>
  </label>
</div>
<div>
  <button>Ajouter</button>
</div>
  </form>";
}
?>

<body class="home">
    <div class="text">
        <h1 id="t1">Bonjour tout le monde</h1>
        <p id="p1">Bonjour et bienvenue sur le meilleur site web de la nuit de l'informatique. Sur ce site, vous allez
            pouvoir rechercher des gens qui ont disparue en mer et qui ont peut etre été sauvé par des gens gentils.</p>
    </div>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
</body>
    </body>
</html>
