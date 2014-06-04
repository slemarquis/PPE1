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

        case 'modifier_joueur':
        {
            if (isset($_POST['formulaire']))
            {

            }
            else
            {
                $id=$_GET['id'];

                $unJoueur=$pdo->getUnJoueur($id);
                echo "unJoueur";
                echo var_dump($unJoueur);
                $lesClubs=$pdo->getLesClubs();
                echo "<br>Les Clubs";
                echo var_dump($lesClubs);
                include("vues/v_modifier_joueurs.php");
            }
        }

        case 'valideUpdate':
        {
            $res = $pdo->UpdateJoueur($_REQUEST['idJoueur'],$_REQUEST['idClub'],$_REQUEST['idCateg'],$_REQUEST['nomJoueur'],$_REQUEST['prenomJoueur'],$_REQUEST['villeJoueur'],$_REQUEST['telJoueur']);
            echo "Joueur mis à jour !";
            $lesJoueurs = $pdo->getLesJoueurs();
            include("vues/v_liste_joueurs.php");
            //echo "truc muche";
            break;
        }

        case 'supprimerJoueur':
        {
            if(isset($_POST['formulaire']))
            $id=$_GET['id'];
            $pdo->  supprJoueur($id);
            //$sup = $pdo->getSupLeJoueur($_GET['idJoueur']);
            //include("vues/v_supression_joueur.php");
            echo "Page en cours de réalisation, veuillez nous en excuser.";
            echo "<br />";
            echo "Merci.";
            break;
        }

    }



?>