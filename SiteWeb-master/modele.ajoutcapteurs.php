<?php 
$piece = $_POST['pieceselectionnée'];
//requete sql pour changer les paramatres de la bdd. Ajouter un capteur à la pièce $piece
include(header.php);
?>
<img class ="picture" src="ValidationIcone.png" alt="icone de validation" />
<h1>Les modifications ont bien été sauvegardées.</h1>
<form action="vues..php" method="GET">
	<input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
</form>