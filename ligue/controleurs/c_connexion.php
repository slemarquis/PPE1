<?php
$action = $_REQUEST['action'];
switch($action)
{
    case "se_connecter":
    {
        if(isset($_REQUEST['se_connecter'])){
            echo "test if isset du boutton";
            $res = $pdo->connection($idM,$mdpM);
        }

        include("vues/v_se_connecter.php");
        break;
    }

}

?>