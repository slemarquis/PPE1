<?php
initJoueur();
$action = $_REQUEST['action'];
switch($action)
{
    case 'voirJoueur':
    {
        $lesJoueurs = $pdo->getLesJoueurs();
        include("vues/v_liste_joueurs.php");
        break;
    }


    case 'ajout_joueur':
    {
        if(isset($_REQUEST['Ajouter'])){
            $prenomJ=$_REQUEST['prenomJoueur'];
            $nomJ=$_REQUEST['nomJoueur'];
            $villeJ=$_REQUEST['villeJoueur'];
            $telJ=$_REQUEST['telJoueur'];

            //$pdo->Ajouter_Joueur($prenomJ,$nomJ,$villeJ,$telJ);
            include('vues/v_ajout_joueur.php');

        }else{
            if(isset($_REQUEST['Retour'])){
                header("Location: http://127.0.0.1/PPE1/ligue/index.php?uc=gerer_joueurs&action=voirJoueur");
                break;

            }else{
                include('vues/v_ajout_joueur.php');
                break;

            }

            break;
        }
        break;
    }

    case 'modifier_joueur':
    {
        if(isset($_REQUEST['UpdateJoueur'])){
            $idJ = $_REQUEST['idJoueur'];
            $idC = $_REQUEST['idClub'];
            $idCateg = $_REQUEST['idCateg'];
            $nomJ = $_REQUEST['nomJoueur'];
            $prenomJ = $_REQUEST['prenomJoueur'];
            $villeJ = $_REQUEST['villeJoueur'];
            $telJ = $_REQUEST['telJoueur'];

            $res = $pdo->UpdateJoueur($idJ,$idC,$idCateg,$nomJ,$prenomJ,$villeJ,$telJ);
            echo "Joueur mis à jour !";

            $lesJoueurs = $pdo->getLesJoueurs();
            include("vues/v_liste_joueurs.php");

        }else{
            if(isset($_REQUEST['Retour'])){
                header("Location: http://127.0.0.1/PPE1/ligue/index.php?uc=gerer_joueurs&action=voirJoueur");
                break;

            }else{
                $idJ = $_GET['id'];
                $leJoueur = $pdo->getLeJoueur($idJ);
                include("vues/v_modifier_joueurs.php");
                break;

            }
        }
        break;
    }


    case 'supprimer_joueur':
    {
        $idJoueur = $_GET['id'];
        $sup = $pdo->SupLeJoueur($idJoueur);
        echo "Joueur supprimé !";

        $lesJoueurs = $pdo->getLesJoueurs();
        include("vues/v_liste_joueurs.php");
        break;
    }

}

?>