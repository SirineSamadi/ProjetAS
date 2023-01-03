<!Doctype html>
<html>
    <head>
        <title>Mon Site</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>    
        <header>
			<div class="conteneur">                      
				<span>
					<a href="" title="Resultats">Compilation des resultats scolaires</a>
                </span>
				<nav>
					<?php
						echo '<a href="index.php">Accueil</a>';
						echo '<a href="boutique.php">Boutique</a>';
						echo '<a href="panier.php">Panier</a>';

					
					// visiteur=4 liens - membre=4 liens - admin=7 liens
					?>
				</nav>
			</div>
        </header>
        <section>
			<div class="conteneur">       