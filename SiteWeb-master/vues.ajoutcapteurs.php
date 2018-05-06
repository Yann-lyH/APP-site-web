<?php 
include(header);
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arr�te tout
    die('Erreur : '.$e->getMessage());
}

$skurt="Salut";
$reponse = $bdd->query(''); //Prends les noms des pièces associée à l'utilisateur. A sécuriser et a faire.
?>
<form method="post" action="modele.ajoutcapteurs.php">
	<p>
	
		<select name="pieceselectionnée">
		<?php 
		//while ($donnees = $reponse->fetch()) { //Egalité, a changer, inégalité pour tests
		    echo "<option value='modele.ajoutcapteurs.php'>$skurt</option>";
		//}
		?>
			<option value="modele.ajoutcapteurs.php">Connexion</option>
			<option value="modele.ajoutcapteurs.php">Inscription</option>
		</select>
		
		<p> Choisir le/les capteur(s) à ajouter à la pièce </p>
		<?php 
		//affichage menu Kevin.
		//Choix des capteurs à ajouter
		?>
		
		
		
		
		
		<input type="submit" value="Go" title="Valider" />
	</p>
</form>