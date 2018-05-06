<!DOCTYPE = php>
<html lang="fr">
	<head>
		<title>Inscription aux services</title>
	</head>
	<body>
<?php
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$numbernameadress = $_POST['numbernameadress'];
$postalcode = $_POST['postalcode'];
$city = $_POST['city'];
$password = $_POST['password']; //a sécuriser
$passwordcheck = $_POST['passwordcheck'];
$taillelogement = $_POST["taille"];

try {
$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
}
catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
if (isset($_POST['mail']) AND isset($_POST['gender']) AND isset($_POST['numbernameadress']) AND isset($_POST['postalcode']) AND isset($_POST['city']) AND isset($_POST['password']) AND isset($_POST['passwordcheck']) AND isset($_POST['taille'])) {
    if ($password==$passwordcheck) {
        $reponse = $bdd->query(''); //Ajouter les champs à la base de données //Securiser contre les injections sql
    } 
    else {
        echo "Mots de passe non identique"; ?>
    	<a href="vues.inscription.php">Retour</a>
        <?php
    }
} 
else {
    echo "Vous n'avez pas saisi toutes les informations";
    ?>
    <a href="vues.inscription.php">Retour</a>
}

<?php 
$reponse->closeCursor(); // Termine le traitement de la requête

?>
	</body>
</html>

