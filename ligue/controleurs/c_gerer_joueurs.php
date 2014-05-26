<?php
initClub();
$action = $_REQUEST['action'];
switch($action)
{
    case 'voirJoueur':
    {
        $lesClubs = $pdo->getLesClubs();
        include("vues/v_liste_clubs.php");
        break;
    }

    case 'modifier_joueur':
    {
        $leClub = $pdo->getLeClub($_GET['idClub']);
        include("vues/v_modifier_club.php");

        /*echo "hello world case modifer_club";
        echo "<br />";*/
        break;
    }

    case 'valideUpdate':
    {
        $res = $pdo->UpdateClub($_GET['idClub']);
        echo "Club mis à jour !";
        $lesClubs = $pdo->getLesClubs();
        include("vues/v_liste_clubs.php");
        //echo "truc muche";
        break;
    }

    case 'supprimerJoueur':
    {
        //$sup = $pdo->getSupLeClub($_GET['idClub']);
        //include("vues/v_supression_club.php");
        echo "Page en cours de réalisation, veuillez nous en excuser.";
        echo "<br />";
        echo "Merci.";
        break;
    }

}



?>