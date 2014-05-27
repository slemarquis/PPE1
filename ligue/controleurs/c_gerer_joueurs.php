<?php
    initClub();
    $action = $_REQUEST['action'];
    switch($action)
    {
        case 'voirJoueur':
        {
            $lesJoueurs = $pdo->getLesJoueurs();
            include("vues/v_liste_joueurs.php");
            break;
        }

        case 'modifier_joueur':
        {
            $leJoueur = $pdo->getLeJoueur($_GET['idJoueur']);
            include("vues/v_modifier_joueur.php");

            /*echo "hello world case modifer_joueur";
            echo "<br />";*/
            break;
        }

        case 'valideUpdate':
        {
            $res = $pdo->UpdateJoueur($_GET['idJoueur']);
            echo "Joueur mis à jour !";
            $lesJoueurs = $pdo->getLesJoueurs();
            include("vues/v_liste_joueurs.php");
            //echo "truc muche";
            break;
        }

        case 'supprimerJoueur':
        {
            //$sup = $pdo->getSupLeJoueur($_GET['idJoueur']);
            //include("vues/v_supression_joueur.php");
            echo "Page en cours de réalisation, veuillez nous en excuser.";
            echo "<br />";
            echo "Merci.";
            break;
        }

    }



?>