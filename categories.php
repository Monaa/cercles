<?php

 
  $req = $db->prepare ('SELECT  id, nom, url FROM cercles.categories');

  $req->execute();
              
              while ($req = $req->fetch()) { 
?> 
            
            
<option value=>
<h1>Les catégories de cercles</h1>
              <h1><img src="<?php echo($req{'url'}); ?>"</h1>
			  <?php echo($req{'nom'}); ?></h1>
              
</option>
              <?php }?>


