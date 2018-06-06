<?php
session_start();
//$_SESSION['page'] = 1;
//$_SESSION['nbMails'] = 10;
function requete_messagerie(){
    $_SESSION["compteur"]= 0;
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
        
    } catch (Exception $e)
    
    {
        
        die('Erreur : ' . $e->getMessage());
        
    }
    //$req_mails = $bdd->query('SELECT * FROM messagerie ORDER BY date DESC');
    $req_mails = $bdd->prepare('SELECT * FROM messagerie WHERE Destinataire = ? ORDER BY date DESC');
    $req_mails->execute(array( $_SESSION['identifiant']));
    
    while ($donnees = $req_mails->fetch()) {
        $_SESSION['expéditeur'.$_SESSION["compteur"].''] = $donnees["Expediteur"];
        $_SESSION['objet'.$_SESSION["compteur"].''] = $donnees["objet"];
        $_SESSION['date'.$_SESSION["compteur"].''] = $donnees["date"];
        $_SESSION["compteur"] = $_SESSION["compteur"] +1;
    }
    $req_mails->closeCursor();
    
    
    
}
requete_messagerie();

?>