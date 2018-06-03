<?php
session_start();
$_SESSION['page'] = 1;
//$_SESSION['nbMails'] = 10;
function requete_messagerie($numPage){
    $_SESSION["compteur"]= 0;
    $limite_sup_mail = $numPage*10;
    $limite_min_mail = $numPage*10 - 10;
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
        
    } catch (Exception $e)
    
    {
        
        die('Erreur : ' . $e->getMessage());
        
    }
    $req_mails = $bdd->query('SELECT * FROM messagerie ORDER BY date DESC');
    /*$req_mails = $bdd->prepare('SELECT * FROM (messagerie ORDER BY date DESC)');
    $req_mails->execute(array( $_SESSION['nbMails']));*/
    
    while ($donnees = $req_mails->fetch()) {
        if ($_SESSION["compteur"] >= $limite_min_mail){
            
            if ($_SESSION["compteur"] < $limite_sup_mail){
                
                $_SESSION['expéditeur'.$_SESSION["compteur"].''] = $donnees["Expediteur"];
                $_SESSION['objet'.$_SESSION["compteur"].''] = $donnees["objet"];
                $_SESSION['date'.$_SESSION["compteur"].''] = $donnees["date"];
                $_SESSION["compteur"] = $_SESSION["compteur"] +1;
            }
        
        
            
        } else {
            $_SESSION["compteur"] = $_SESSION["compteur"] +1;
        }
            
    }
    
    return $limite_min_mail;
    
    
    
}

?>