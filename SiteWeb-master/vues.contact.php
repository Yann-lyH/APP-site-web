<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" href="vues.contact.css" />
    </head>

 	<body>
 		<?php include("vues.header.php");?>
     	<div class="page_contact">
     		<div class="contact_boxes">
     			<p> Un problème ? Envoyez un message à nos administrateurs ! </p>
     		</div>
     		
     		<form method="post" action="modele.contact.php">
     		    <div class="inputs_mail">
     		    <?php 
                    if ($_SESSION["identifiant"]=="admin"){
                ?>
                <p><label for="identifiant">Adresse mail: </label><input type="text" name="identifiant" id="identifiant"></p>
                <?php   
                    }
                ?>
     		        <?php 
     		        if(isset($_POST["response_objet"])) {
     		            ?>
     		            <p><label for="objet">Objet: </label><input type="text" name="objet" id="objet" value="<?php echo 'Rep/ '.$_POST["response_objet"].'';?>"></p>
                        <?php
     		        } else {
     		            echo '<p><label for="objet">Objet: </label><input type="text" name="objet" id="objet"></p>';
     		        }
     		        ?>
     				<textarea name="message" id="message" placeholder="Saisir votre message" rows="15" cols="50"></textarea>
     				<p class="bouton"> <input type="submit" value="Envoyer" class="bouton_envoyer"/> </p>
     			</div>
     			
            </form>
           <?php 
              if ($_SESSION["identifiant"]=="admin"){
           ?>
           <div>
                <p class="contact">Ou contactez-nous : <br/> <br/>
                    Téléphone : 01 49 54 52 00 <br/> <br/>
                    Adresse : 28 rue Notre-Dame des Champs <br/> <br/> 
                75006 PARIS 
                </p>
            </div>    
           <?php   
           }
           ?>
           
           
            
     	</div>
     	
</body>
</html>