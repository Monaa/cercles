<a  class="btn btn-default" href="http://google.com">Test lien</a>


<h2>Trouver un cercle près de chez vous</h2>
<p>
  <input name="recherche cercle" type="search" id="recherche cercle" autocomplete="off" value="Saisir la ville, le départemet, la région, le pays" size="70">

<a href="résultat recherche cercle.html"><input type="button" name="rechercher" id="rechercher" value="Rechercher"></a></p>
<p></p>
<p><strong>Cercles,</strong> un véritable réseau social de  proximité au service des centres d'intérêt. </p>
<p></p>
<p></p>
<p></p>
<p>Gratuit</p>
<p>Accessible à tous</p>
<p>Partout dans le monde</p>
<p></p>
<p></p>
<p> Nouvel arrivant dans une ville? </p>
<p>Envie de partager une passion ? </p>
<p>Tout simplement agrandir son cercle d'amis ? </p>
<p> Cercles va vous aider à vous mettre en relation avec des personnes près de chez vous ! </p>
<p></p>
<p></p>
<h2>Une fois  inscrit, que peut-on faire ? </h2>
<ul>
  <li>Céer et suivre des cercles publics</li>
  <li>Lire et participer aux fils de discussion des cercles suivis</li>
  <li>Créer et s'inscrire à des rencontres au sein des  cercles suivis</li>
  <li>S'abonner et créer des cercles privés sur  invitation et y inviter des amis</li>
</ul>
<p></p>
<p></p>
<h2>Dernière création de cercle</h2>
<p>
  <?php
  //execute the SQL query and return records
  $result = mysqli_query($mysql, "SELECT * FROM cercles ORDER BY creation DESC LIMIT 1");
  
  //fetch tha data from the database
  //while ($row = mysql_fetch_array($result)) {
  //  echo "ID:".$row{'id'}." Name:".$row{'model'}."".$row{'year'}."<br>";
  //}

  $dernier_cercle = mysqli_fetch_array($result);
	?>

</p>
<table width="300" height="200" border="0" ;>
  <tbody>
  <td height="21" align="center" valign="top" color="#92DE12" ;>
  	<h1><?php echo($dernier_cercle{'nom_cercle'}); ?></h1>
  	<p></p>
    <p> <?php echo($dernier_cercle{'commentaire'}); ?> </p> 
    <p>créé le <?php echo($dernier_cercle{'creation'}); ?>. </p>
   </td>	  
  </tr>
</table>
<p></p>
<p></p>