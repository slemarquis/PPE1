<?php
//if(isset($_SESSION['membre'])){
//echo "hello world vue modifier club";
echo "<br />";
echo "<br />";
echo "<br />";


foreach($leJoueur as $value){
    $idJ = $value['idJoueur'];
    $idClub = $value['idClub'];
    $idCateg = $value['idCateg'];
    $nomJ = $value['nomJoueur'];
    $prenomJ = $value['prenomJoueur'];
    $villeJ = $value['villeJoueur'];
    $telJ = $value['telJoueur'];

    echo "Modifier le joueur ".$nomJ." ".$prenomJ."";

    ?>
    <fieldset>
        <form method="POST" action="index.php?uc=gerer_joueurs&action=modifier_joueur">
            <?php

            echo "<table border='1'>";

            echo "<tr>";
            echo "<td>";
            echo "Nom :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='nomJoueur' value='".$nomJ."'/>";
            echo "</td>";
            echo "</tr>";


            echo "<tr>";
            echo "<td>";
            echo "Prénom :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='prenomJoueur' value='".$prenomJ."'/>";
            echo "</td>";
            echo "</tr>";


            echo "<tr>";
            echo "<td>";
            echo "Ville du joueur :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='villeJoueur' value='".$villeJ."'/>";
            echo "</td>";
            echo "</tr>";


            echo "<tr>";
            echo "<td>";
            echo "Téléphone du Joueur :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='telJoueur' value='".$telJ."'/>";
            echo "</td>";
            echo "</tr>";


            echo "<tr>";
            echo "<td>";
            echo "Club :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='idClub' value='".$idClub."'/>";
            echo "</td>";
            echo "</tr>";


            echo "<tr>";
            echo "<td>";
            echo "Catégorie :";
            echo "</td>";

            echo "<td align=right>";
            echo "<input type='text' name='idCateg' value='".$idCateg."'/>";
            echo "</td>";
            echo "</tr>";



            echo "</table>";
            echo "<br />";
            ?>

            <input type="hidden" name="idJoueur" value="<?php echo $idJ?>">

            <br />
            <input type="submit" name="UpdateJoueur" value="MODIFIER">
            <input type="submit" name="Retour" value="RETOUR"/>
        </form>

    </fieldset>
    <?php
    /*        }
        }else{
            echo "404 ERROR - PAGE INTROUVABLE !";
    */    }
?>