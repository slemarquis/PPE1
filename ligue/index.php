<?php
    session_start();



    echo var_dump($_SESSION);

    require_once("util/fonctions.inc.php");
    require_once("util/class.pdoLigue.inc.php");
    include("vues/v_entete.php");
    include("vues/v_bandeau.php");


    if(!isset($_REQUEST['uc']))
        $uc = 'accueil';
    else
        $uc = $_REQUEST['uc'];

    $pdo = PdoLigue::getPdoLigue();
    switch($uc)
    {
        case 'accuiel':
            {include("vues/accueil.php");break;}
        case 'connexion':
            {include('controleurs/c_connexion.php');break;}
        case 'gerer_joueurs':
            {include("controleurs/c_joueurs.php");break;}
        case 'gerer_club':
            {include("controleurs/c_gerer_club.php");break;}
    }
    include("vues/v_pied.php");
?>