<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Index</title>
    <style type="text/css">
      body,td,th {
        font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        color: #993365;
      }
    </style>

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

    <div id="footer"> 
      <?php include('footer.php'); ?>
    </div>

  </body>
</html>
