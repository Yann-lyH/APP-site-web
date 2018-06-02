<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" href="vues.messagerie_client.css" />
    </head>

 	<body>
 	    <?php include("vues.header.php");?>
 	   <div class="conteneur_messagerie">
 	    <div class="bloc_messagerie">
 	    <nav>
              <ul class="menu_messagerie">
                    <p class="menu_title"> Menu </p>
                    <li class="option_mails"><a href="vues.messagerie_client.php">Boite de réception</a></li>
                    <li class="option_mails"><a href="vues.contact.php">Envoyer un mail aux administrateurs</a></li>
                    <li class="option_mails"><a href="">Messages envoyés</a></li>
             </ul>
         </nav>
         </div>
    <div class="bloc_messagerie">
    <table class="contenu_messagerie">
   <caption>Boite de réception</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Expéditeur</th>
           <th>Objet</th>
           <th>Date</th>
           <th>Contenu</th>
       </tr>
   </thead>

   <tfoot> <!-- Pied de tableau -->
       <tr>
           <th>
               
               <a title="Page précédente" href="https://openclassrooms.com"><p><img class="fleche_1page"src="images site APP/fleche_left_reception.png" alt="Photo de fleche page précédente" /></p></a>
               
          </th>
           <th>
           
               <a title="reculer de 5 pages"  href="https://openclassrooms.com"><p><img class="fleche_far_page" src="images site APP/fleche_far_begin_reception.png" alt="Photo de fleche début réception" /></p></a>
               
           </th>
           <th>
           
               <a title="avancer de 5 pages" href="https://openclassrooms.com"><p><img class="fleche_far_page" src="images site APP/fleche_far_end_reception.png" alt="Photo de fleche fin réception" /></p></a>
               
           
           </th>
           
           <th>
           
               <a title="Page suivante" href="https://openclassrooms.com"><p><img class="fleche_1page" src="images site APP/fleche_right_reception.png" alt="Photo de fleche page suivante" /></p></a>
               
           
           </th>
       </tr>
   </tfoot>

   <tbody> <!-- Corps du tableau -->
   
   <?php include ("controller.messagerie_client.php"); ?>
   
   
   </tbody>
   </div>
     </div>
</body>
</html>