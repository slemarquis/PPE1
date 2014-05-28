<?php
$action = $_REQUEST['action'];
switch('action')
{
    case "se_connecter":
    {

        include("vues/v_se_connecter.php");
        break;
    }

}

?>