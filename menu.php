<div id="menu">
<a href="/?action=home_identifies">
 <p><img src="images/home.png" alt=""/>  Bonjour  <?php
    if (isset($_SESSION['pseudo'])) {
      echo  $_SESSION['pseudo'];
    }
   ?> 
</p></a>
<ul>
  <li>Données utilisateur
    <ul>
		<li><a  href="/?action=home_identifies">Ma page d'accueil</a></li>    
		<li><a  href="/?action=mes_cercles">Mes cercles</a></li>
        <li><a  href="/?action=mon_compte">Mon compte</a></li>
        <li><a  href="/?action=mes_messages"><img src="images/courrier.png"	/>  Mes messages</a></li>
        <li><a  href="/?action=mes_cercles">Mes amis</a></li>
    </ul>
   </li>
   <li>Données membres
     <ul>
      <li><a  href="/?action=recherche_membre">Rechercher un membre</a> </li>
      </ul>
   </li>
  <li>Données cercles
    <ul>
      <li><a  href="/?action=recherche_cercle">Rechercher un cercle</a> </li>
      <li><a  href="/?action=add_cercle">Créer un cercle</a> </li>
      <li><a  href="/?action=categories">Catégories</a></li>
      </ul>
  </li>
  <li>Site
    <ul>
      <li><a  href="/?action=presentation_home">Présentation</a></li>
      <li><a href="mailto:Contact@XXX.com">Contact</a></li>
      <li><a  href="/?action=qui_sommes_nous">Qui sommes-nous ?</a></li>
      <li><a  href="/?action=CGU">Conditions Générales d'Utilisation</a></li>
    </ul>
  </li>
  </ul>
</div>

