<?php
    //echo "hello world vue liste_joueurs";
    echo "<br />";
    echo "<br />";
    echo "<br />";

    echo "<fieldset>";
    foreach($lesJoueurs as $value){
        $idJ = $value['idJoueur'];
        $nomJ = $value['nomJoueur'];
        $adrJ = $value['adresseJoueur'];
        $cpJ = $value['cpJoueur'];
        $villeJ = $value['villeJoueur'];
        $telJ = $value['telJoueur'];
        $mailJ = $value['mailJoueur'];


    ?>
    <ul>

        <form method="GET" name="FRM<?php echo $idJ;?>" action="index.php">


            <INPUT type="hidden" name ="uc" value = "gerer_joueur"/>
            <INPUT type="hidden" name ="idJoueur" value = "<?php echo $idJ; ?>">
            <INPUT type="hidden" name ="action" value = "modifier_joueur">


            <?php

            echo "<input type='hidden' value='".$idJ."'/>";
            echo "<input type='hidden' value='".$nomJ."'/>";
            echo "<input type='hidden' value='".$adrJ."'/>";
            echo "<input type='hidden' value='".$cpJ."'/>";
            echo "<input type='hidden' value='".$villeJ."'/>";
            echo "<input type='hidden' value='".$telJ."'/>";
            echo "<input type='hidden' value='".$mailJ."'/>";
            echo "<table border='1'>";
                echo "<tr>";
                    echo "<td>".$nomJ."</td>";
                    echo "<td>".$adrJ."</td>";
                    echo "<td>".$cpJ."</td>";
                    echo "<td>".$villeJ."</td>";
                    echo "<td>".$telJ."</td>";
                    echo "<td>".$mailJ."</td>";
                echo "</tr>";
            echo "</table>";
            ?>
            <input type="submit" value="Modifier"/>

        </form>
        <form method="GET" name="frm<?php echo $idJ;?>" action="index.php">

            <INPUT type="hidden" name ="uc" value = "gerer_joueur"/>
            <INPUT type="hidden" name ="idClub" value = "<?php echo $idJ; ?>">
            <INPUT type="hidden" name ="action" value = "supprimerJoueur">

            <input type="submit" value="Supprimer"/>
        </form>

    </ul>
<?php
    }
    echo "</fieldset>";
?>
           