<div id="cercle">


<?php

 
  $req = $db->prepare ('SELECT * FROM cercles where id=3');

  $req->execute();
              
         while ($ce = $req->fetch()) { 
			  
?> 
            
                             <p>
                            <h1> <?php echo($ce{'nom_cercle'}); ?></h1>
  							<h2>[VILLE] - [DEPARTEMENT]</h2>

                            
							<p>Description </p>
							<p><?php echo($ce{'commentaire'}); ?>
                            
                            </p>
							<p>Date de création</p>
							<p><?php echo($ce{'creation'}); ?>
                            
							<p>Nombre de membres : </p>
							<?php 
					
							 
 }?>
							  
							  
  </p>
  <h1><?php echo($ce{'nom_cercle'}); ?></h1>



<p></p>
    
 <p>Inviter des membres</p>
 
<ul>  
    <li>Responsable du cercle </li>
    <li>[AVATAR] [PRENOM] [1ERE LETTRE DU NOM]</li>
</ul>

</div> 
