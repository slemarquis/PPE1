<?php
    //if(isset($_SESSION['membre'])){
        //echo "hello world vue modifier club";
        echo "<br />";
        echo "<br />";
        echo "<br />";


        foreach($leClub as $value){
            $idC = $value['idClub'];
            $nomC = $value['nomClub'];
            $villeC = $value['villeClub'];
            $telC = $value['telClub'];

            echo "Modifier le club ".$idC."";

        ?>
        <fieldset>
            <form name="FRM_modif_club" method="POST" action="index.php?uc=gerer_club&action=modifier_club">
                <?php

                    echo "<table border='1'>";

                        echo "<tr>";
                            echo "<td>";
                                echo "Nom :";
                            echo "</td>";

                            echo "<td align=right>";
                                echo "<input type='text' name='nomClub' value='".$nomC."'/>";
                            echo "</td>";
                        echo "</tr>";


                        echo "<tr>";
                            echo "<td>";
                                echo "Ville du club :";
                            echo "</td>";

                            echo "<td align=right>";
                                echo "<input type='text' name='villeClub' value='".$villeC."'/>";
                            echo "</td>";
                        echo "</tr>";


                        echo "<tr>";
                            echo "<td>";
                                echo "Téléphone du Club :";
                            echo "</td>";

                            echo "<td align=right>";
                                echo "<input type='text' name='telClub' value='".$telC."'/>";
                            echo "</td>";
                        echo "</tr>";


                    echo "</table>";
                    echo "<br />";
                ?>

                <input type="hidden" name="idClub" value="<?php echo $idC?>">

                <br />
                <input type="submit" name="UpdateClub" value="MODIFIER">
                <input type="submit" name="Retour" value="RETOUR"/>
            </form>

        </fieldset>
<?php
/*        }
    }else{
        echo "404 ERROR - PAGE INTROUVABLE !";
*/    }
?>