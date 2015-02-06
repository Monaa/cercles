<?php
  $username = "fherbert";
  $password = "penelope49";
  $hostname = "fr.anco.is"; 
  $db_name  = "cercles";

  //connection to the database
  $mysql = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
  mysqli_select_db($mysql, $db_name) or die("Could not select DB");
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Index</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/styles.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
  	<?php include('header.php'); ?>
    
    <div id="background_contenu">
      <div id="contenu">
        <?php 
          if (isset($_GET['action'])) {
            include($_GET['action'] . '.php');
          }
          else {
            include('home.php');
          }
        ?>
      </div>
    </div>
    
    <div id="footer"> 
      <?php include('footer.php'); ?>
    </div>

  </body>
</html>
