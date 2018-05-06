<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Lares</title>
		<link rel="stylesheet" href="ajout_de_pieces.css"/>
	</head>
	
	<body>
	<p>
		<form method="post" action="piece.php">
		
		<div id="conteneur">
		
			<div class="taille_du_texte">Ajoutez une pièce:</div>
			<input type="text" name="nom_de_piece" id="nom_de_piece" placeholder="Saisir le nom de la pièce"/></br>
		
			<div class="taille_du_texte">Choisissez les capteurs disponibles dans cette pièce:</div>
		</div>
				
		<img src="capteur_de_presence.png" alt= "icone capteur de présence" title="capteur de présence"/>
		<input type= "checkbox"/>
		<img src="thermometre.png" alt= "icone themomètre" title="thermomètre"/>
		<input type= "checkbox"/>
		<img src="capteur_de_luminosite.png" alt= "icone capteur de luminosité" title="capteur de luminosité"/>
		<input type= "checkbox"/>
		<img src="capteur_d_humidite.png" alt= "icone capteur de d'humidité" title="capteur d'humidité"/>
		<input type= "checkbox"/>
		
		</form>
		
	</p>
	
	</body>
	
</html>
