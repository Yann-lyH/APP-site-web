<form method="POST" action="modele.inscription1.php">
	
	<label>Mail :*</label>
	<input type="text"  name="email" id="mail"/> <br>
	
	<label>Genre :*</label>
	<input type="radio" name="gender" id="gender" value="male" checked> Homme<br>
  	<input type="radio" name="gender" id="gender" value="female"> Femme<br>
  	<input type="radio" name="gender" id="gender" value="other"> Autre<br>
	
	<p>Adresse :</p>
	<label>Numéro et nom de la rue :*</label>
	<input type="text" name="numbernameadress" id="numbernameadress" /><br>
	
	<label>Code postal :*</label>
	<input type="text" name="postalcode" id="postalcode" /><br>
	
	<label>Ville :*</label>
	<input type="text" name="city" id="city"/><br>
	
	<label>Mot de passe :*</label>
	<input type="password"  name="password" id="password"/><br>
	
	<label>Confirmer le mot de passe :*</label>
	<input type="password"  name="passwordcheck" id="passwordcheck"/><br>

	<label>Taille du logement :*</label>
	<input type="text" name="taille" id="taille"/><br>

    <button type="submit" name="submit">S'inscrire</button>

</form>

<p><a href="vues.connexion.php">Retour</a></p>