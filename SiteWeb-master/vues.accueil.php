<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vues.accueil.css" />
        <title>Accueil du compte</title>
    </head>

    <body>
    	<header>
    		<nav>
    			<?php include(pageHeader.php); ?>

            </nav>
 

        </header>



        <section>
        	<div id="conteneur0">
        	<h1> Accueil du compte </h1>
        	<p>Bienvenue madame/monsieur <?php echo "... ";?>!</p>
        	</div>

        	
        	<div id= "conteneur1">
        	      <div id="conteneur2">
        			<input id="boutonDonnees" type="image" src="images site APP\cloud.jpg" value="Données"id="fig1"/>
        			<p id="legendeDonnees">Données</p>
        			</div>
        			
        			<div id="conteneur3">
        			<input id="boutonLogement" type="image" src="images site APP\maison.png" value="Logement"id="fig2"/>
        			<p id="legendeLogement">Logement</p>
        			</div>
        			
        			<div id="conteneur4">
        			<input id="boutonStat" type="image" src="images site APP\stat.jpg" value="Stat"id="fig4"/>
        			<p id="legendeStat">Statistiques</p>
        			</div>
        			
        			<div id="conteneur5">
        			<input id="boutonCapteurs" type="image" src="images site APP\capteur.jpg" value="Capteurs"id="fig5"/>
        			<p id="legendeCapteurs">Capteurs</p>
        			
        	</div>
        			

        		
        	</div>
        	



        </section>

    
    </body>
</html>

