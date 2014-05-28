<div id="bandeau">
<!-- Images En-t�te -->
<!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->
<img src="images/lafleur.gif"	alt="Lafleur" title="Lafleur"/>
</div>
<!--  Menu haut-->
<ul id="menu">
	<li><a href="index.php?uc=accueil"> Accueil </a></li>
	<li><a href="index.php?uc=connexion&action=se_connecter"> Connexion </a></li>

    <?php
        if(isset($_SESSION['membre'])){?>
            <li><a href="index.php?uc=gerer_club&action=voirClub"> Clubs </a></li>
            <li><a href="index.php?uc=gerer_joueurs&action=voirJoueur"> Joueurs </a></li>
    <?php
        }
    ?>
</ul>
