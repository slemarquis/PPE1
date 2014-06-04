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


		case 'ajout_club':
		{
            if(isset($_REQUEST['Ajouter'])){
                $nomC=$_REQUEST['nomClub'];
                $villeC=$_REQUEST['villeClub'];
                $telC=$_REQUEST['telClub'];

                $pdo->Ajouter_Club($nomC,$villeC,$telC);

            }else{
                if(isset($_REQUEST['Retour'])){
                    header("Location: http://127.0.0.1/PPE1/ligue/index.php?uc=gerer_club&action=voirClub");
                    break;

                }else{
                    include('vues/v_ajout_club.php');
                    break;

                }

                break;
            }
        }

        case 'modifier_club':
        {
            if(isset($_REQUEST['UpdateClub'])){
                $idC = $_REQUEST['idClub'];
                $nomC = $_REQUEST['nomClub'];
                $villeC = $_REQUEST['villeClub'];
                $telC = $_REQUEST['telClub'];

                $res = $pdo->UpdateClub($idC,$nomC,$villeC,$telC);
                echo "Club mis à jour !";
                break;

            }else{
                if(isset($_REQUEST['Retour'])){
                    header("Location: http://127.0.0.1/PPE1/ligue/index.php?uc=gerer_club&action=voirClub");
                    break;

                }else{
                    $idC = $_GET['id'];
                    $leClub = $pdo->getLeClub($idC);
                    include("vues/v_modifier_club.php");
                    break;

                }
            }
            break;
        }


        case 'supprimerClub':
		{
			//$sup = $pdo->SupLeClub($_REQUEST['idClub']);
			//include("vues/v_supression_club.php");
			break;
		}
		
	}

?>