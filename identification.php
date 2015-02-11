    
<h1>Identification</h1>

<form method="post" action="/index.php?action=home_identifies">
  				<!-- L'action est facultative quand le formulaire est traité par le même script PHP -->
    
  <div class="form-group">
      <label for="pseudo">Pseudo</label> 
      <input id="pseudo" name="pseudo" class="form-control" />
  </div>

  <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input id="mdp" name="mdp" type="password" class="form-control" />
  </div>

  <div class="checkbox">
      <label for="save_password">
        <input type="checkbox" name"save_password" id="save_password" />
        Sauvegarder le mot de passe
      </label>
  </div>

  <div class="form-group">
      <input type="submit" value="S'identifier" class="btn default" />
  </div>
</form>
