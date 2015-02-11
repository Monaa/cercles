<div id="header">

<h1 id="logo"><a href="/?action=home"><span>Cercles</span></a></h1>

<h2>Réseau Social de proximité au service des centres d'intérets</h2>
<p>  <?php
        
        if (isset($_SESSION['pseudo']))
        {
             echo 'Bonjour ' . $_SESSION['pseudo'];
        }
        else {
    ?>
</p>
  <div id="#boutons">    		
    <a  class="btn btn-default" href="/?action=identification">S'identifier</a>       
    <a  class="btn btn-default" href="/?action=inscription">S'inscrire</a>
    <a  class="btn btn-default" href="/?action=deconnexion">Déconnexion</a>
  </div>       

</div>

<?php } ?>
