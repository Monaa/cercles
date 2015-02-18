<?php
  if (isset($_GET['id_cercle'])) {

    $req = $db->prepare('SELECT * FROM cercles where id = :id');
    $req->execute(array( ':id' => $_GET['id_cercle'] ));
  
    if ($ce = $req->fetch()) { ?> 
      <div class="cercle" id="cercle-<?php echo($ce{'id'}) ?>">
        <h1> <?php echo($ce{'nom_cercle'}); ?></h1>
        <h2>[VILLE] - [DEPARTEMENT]</h2>                            
        <p>Description </p>
        <p><?php echo($ce{'commentaire'}); ?></p>
        <p>Date de création</p>
        <p><?php echo($ce{'creation'}); ?></p>
  
        <?php $req_count = $db->prepare('SELECT COUNT(*) AS cnt FROM cercles_utilisateurs WHERE id_cercle = :id_cercle');
  
        $req_count->execute(array( ':id_cercle' => $_GET['id_cercle'] ));
  
        $ce_count = $req_count->fetch(); ?>
        <p>Nombre de membres : <?php echo($ce_count{'cnt'}); ?></p>
        <h2>Membres du cercle </h2>
  
        <p><img src="images/@.png" />Inviter des membres</p>
  
        <ul>  
          <li>Responsable du cercle </li>
          <li>[AVATAR] [PRENOM] [1ERE LETTRE DU NOM]</li>
        </ul>
      </div>

    <?php } else { ?>
      <div>Cercle introuvable !</div>
    <?php } ?>

  <?php } else { ?>
    <div>Paramètre manquant dans l'URL</div>
  <?php } 
?>

