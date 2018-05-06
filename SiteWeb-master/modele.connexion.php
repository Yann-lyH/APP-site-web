<!DOCTYPE = php>
<html lang="fr">
	<head>
		<title>Connexion aux services</title>
	</head>
	<body>
<?php
$compte = $_POST['login'];
$mdp = $_POST['pass']; //a sécuriser
$test= 0;

try
{
$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrète tout
    die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM verifiedusers'); //à sécuriser


while ($donnees = $reponse->fetch())
{   
if ($mdp==$donnees['Pass'] AND $compte==$donnees['Login']) {
    $test=1;
    break;
    }
}

if ($test==0) {
    echo "Identifiants erronés <br/>";
    include("vues.connexion.php");
} else {
    include("vues.Menu.php");
}
$reponse->closeCursor(); // Termine le traitement de la requ�te


?>
</body>
</html>

