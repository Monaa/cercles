<?php 
  session_start(); 

  $username = "fherbert";
  $password = "penelope49";
  $hostname = "fr.anco.is"; 
  $db_name  = "cercles";

  //connection to the database
  // Je laisse la première manière de façon à ce que tout ne se mette
  // pas à planter d'un coup. A enlever dès que tous les appels à la DB auront été changés
  $mysql = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
  mysqli_select_db($mysql, $db_name) or die("Could not select DB");
  mysqli_query($mysql, "SET NAMES utf8");

  // Connection au serveur, d'une autre manière
  $dns = 'mysql:host=fr.anco.is;dbname=cercles';
  $db  = new PDO( $dns, $username, $password );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->prepare('SET NAMES utf8')->execute();
  
  include('vignettes.php');


  # On teste la présence d'un pseudo et d'un mdp dans les paramètres du post
  # s'il n'y en a pas, alors ça veut dire qu'on n'est pas dans un retour de formulaire d'authentification
  if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    // hachage du mdp		
    $pass_hache = sha1 ($_POST['mdp']);
    $pseudo     = $_POST['pseudo'] ;

    //vérification des identifiants
    $req = $db->prepare ('SELECT id, pseudo FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp');

    $req->execute(array(
      ':pseudo' =>  $pseudo,
      ':mdp' =>     $pass_hache    
    ));

    $resultat = $req->fetch();

    if (!$resultat)
    {
      echo 'Mauvais identifiant ou mot de passe';
    }
    else 
    {
      $_SESSION['pseudo']         = $resultat['pseudo'];	
      $_SESSION['id_utilisateur'] = $resultat['id'];
    }
  }

  if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    session_unset(); 
    session_destroy();
  }

?><!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Index</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/styles.css" type="text/css" rel="stylesheet">

  </head>

  <body>
    <?php include('header.php'); ?>
  

  <?php
    if (isset($_SESSION['pseudo'])) {
      include('menu.php');
    }
  ?>
  

    
    <div id="background_contenu">
        <div id="contenu">
            <p>
              <?php 
              if (isset($_GET['action'])) {
                include($_GET['action'] . '.php');
              }
              else {
                include('home.php');
              }
            ?>
            
            
          </p>
          </div>
        </div>
        
        <div id="footer">
          <?php include('footer.php'); ?>  
        </div>

	</body>
</html>
