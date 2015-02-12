<div id="header">

  <h1 id="logo"><a href="/?action=home">Cercles</a></h1>
  <h2>Réseau Social de proximité au service des centres d'intérets</h2>

  <?php
    if (isset($_SESSION['pseudo'])) {
      echo '<p>' . $_SESSION['pseudo'];
      echo '<a  class="btn btn-default" href="/?action=deconnexion">Déconnexion</a></p>';
    }
    else { 
      ?> 
     
      <div id="#boutons">    		
        <a class="btn btn-default" href="/?action=identification">S'identifier</a>       
        <a class="btn btn-default" href="/?action=inscription">S'inscrire</a>
      </div> <?php 
    } 
  ?>
</div>
