<p><strong>Trouver un cercle près de chez vous</strong></p>
<p>
  <input name="recherche cercle" type="search" id="recherche cercle" autocomplete="off" value="Saisir la ville, le départemet, la région, le pays" size="70">

<a href="résultat recherche cercle.html"><input type="button" name="rechercher" id="rechercher" value="Rechercher"></a></p>
<p></p>
<p><strong>Cercles,</strong> un véritable réseau social de  proximité au service des centres d'intérêt. </p>
<p>Gratuit</p>
<p>Accessible à tous</p>
<p>Partout dans le monde</p>
<p></p>
<h2><strong>Dernière  création de cercle : </strong></h2>


<?php
  //execute the SQL query and return records
  $result = mysqli_query($mysql, "SELECT * FROM cercles ORDER BY creation DESC LIMIT 1");
  
  //fetch tha data from the database
  //while ($row = mysql_fetch_array($result)) {
  //  echo "ID:".$row{'id'}." Name:".$row{'model'}."".$row{'year'}."<br>";
  //}

  $dernier_cercle = mysqli_fetch_array($result);
?>

<p>
  <?php echo($dernier_cercle{'nom_cercle'}); ?> créé le <?php echo($dernier_cercle{'creation'}); ?>.
</p>

<p></p>
<h2><strong>Comment ça  marche? </strong></h2>
<p>  Nouvel arrivant dans une ville,  besoin de rencontrer des personnes autour d'un thème particulier de façon  ponctuelle ou durable, pas loin de chez vous, pour partager une passion,  agrandir son réseau d'amis, <strong><em>Cercles</em></strong> va vous y aider! </p>
<p>  Afin de consulter et participer à  la vie de un ou plusieurs cercles publics accessibles à tous, ou privé sur  invitation, il faut, au préalable s'inscrire sur le site et avoir une adresse  email valide. </p>
<p></p>
<h2><strong>Une fois  inscrit, que peut-on faire ? </strong></h2>
<ul>
  <li>Céer et suivre des cercles publics</li>
  <li>Lire et participer aux fils de discussion des cercles suivis</li>
  <li>Créer et s'inscrire à des rencontres au sein des  cercles suivis</li>
  <li>S'abonner et créer des cercles privés sur  invitation et y inviter des amis</li>
</ul>
<p></p>
<h2><strong>Qui  sommes-nous ?</strong></h2>
<p>  Maman d'une adorable petite  fille, en congé maternité, je me suis fait la remarque pour la énième fois que  j'aimerais rencontrer d'autres futures maman, ou tout simplement d'autres  personnes ne travaillant pas. En effet, je me sentais un peu seule chez moi  pendant la semaine tandis que tous mes amis et mon mari travaillaient. <br>
J'ai donc cherché à rencontrer  d'autres personnes, et je me suis vite rendue compte que la tache s'avérait  compliqué, surtout en plein hiver. J'ai eu alors cette idée de plate forme  d'échange pour résoudre mon problème ponctuel d'isolement hivernal en imaginant  une solution pour tous. </p>
<p></p>
<h2><strong>Les catégories  de cercles</strong></h2>
<ul>
  <li>Activtés mauelles</li>
  <li>Activités artistiques</li>
  <li>Nature</li>
  <li>Société</li>
  <li>Sport</li>
  <li>Santé</li>
  <li>Famille</li>
  <li>Autres</li>
</ul>
