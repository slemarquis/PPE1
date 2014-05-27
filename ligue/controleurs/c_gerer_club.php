<?php
    initClub();
    $action = $_REQUEST['action'];
    switch($action)
    {
        case 'voirClub':
        {
            $lesClubs = $pdo->getLesClubs();
            include("vues/v_liste_clubs.php");
            break;
        }
		
		case 'modifier_club':
		{
			$leClub = $pdo->getLeClub($_GET['id']);
			include("vues/v_modifier_club.php");
			
			/*echo "hello world case modifer_club";
			echo "<br />";*/
			break;
		}

        case 'valideUpdate':
        {
            if(isset($_REQUEST['UpdateClub']))
            {
                $res = $pdo->UpdateClub($_REQUEST['idClub'],$_REQUEST['nomClub'],$_REQUEST['adresseClub'],$_REQUEST['cpClub'],$_REQUEST['villeClub'],$_REQUEST['telClub'],$_REQUEST['mailClub']);
                echo "Club mis à jour !";

            }
            $lesClubs = $pdo->getLesClubs();
            include("vues/v_liste_clubs.php");
            //echo "truc muche";
            break;
        }

		case 'supprimerClub':
		{
			//$sup = $pdo->SupLeClub($_REQUEST['idClub']);
			//include("vues/v_supression_club.php");
			echo "Page en cours de réalisation, veuillez nous en excuser.";
			echo "<br />";
			echo "Merci.";
			break;
		}
		
	}
    


?>