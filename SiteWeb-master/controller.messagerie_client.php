<?php
include ("model.messagerie_client.php");

for ($i = 0; $i<$_SESSION["compteur"]; $i++) {
    $value_expediteur = $_SESSION['expéditeur'.$i.''];
    $value_objet = $_SESSION['objet'.$i.''];
    $value_date = $_SESSION['date'.$i.''];
    echo '<tr>
           <td>' . $value_expediteur. '</td>
           <td>' . $value_objet. '</td>
           <td>' . $value_date. '</td>
           <td class="content_mail"> <a title="Voir contenu" href="https://openclassrooms.com"> <p> Voir le contenu du mail </p> </a> </td>
          </tr> <br/>';
}
?>