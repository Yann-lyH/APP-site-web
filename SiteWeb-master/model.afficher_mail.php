<?php
session_start();
$index = $_POST["index_mail"];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
}
$req_mail_content = $bdd->prepare('SELECT * FROM messagerie WHERE date = ?');
$req_mail_content->execute(array( $_SESSION['date'.$index.'']));

while ($donnees = $req_mail_content->fetch()) {
    echo '<div class="afficher_mail">
           <div class="en_tête">
              <p class="objet">Objet: '.$donnees["objet"].'</p>
              <p class="date">'.$donnees["date"].'</p>
           </div>
           <div class="middle">
             <p class="contenu">'.$donnees["Contenu"].'</p>
           </div>
           <div class="bas">
             <form method="post" action="vues.messagerie_client.php">
                  <input class= "bouton_return" type="submit" value="retour à la messagerie"/>
             </form>

             <form method="post" action="vues.contact.php">
                  <input type="hidden" name="response_objet" value="'.$donnees["objet"].'" />
                  <input class= "bouton_response" type="submit" value="répondre"/>
             </form>
           </div>
         </div>';
        
}