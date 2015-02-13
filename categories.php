<h1>Les catégories</h1>

<?php

 
  $req = $db->prepare ('SELECT  id, nom, url FROM cercles.categories');

  $req->execute();
              
         while ($cat = $req->fetch()) { 
			  
?> 
            
                             <h2>
                             <img src="<?php echo($cat{'url'}); ?>" />
							 <?php echo($cat{'nom'}); ?>
                             </h2><?php 
					
							 
 }?>


