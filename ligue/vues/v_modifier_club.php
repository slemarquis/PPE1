<?php

	echo "hello world vue modifier club";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	
	
	foreach($leClub as $value){
        $idC = $value['idClub'];
        $nomC = $value['nomClub'];
        $adrC = $value['adresseClub'];
        $cpC = $value['cpClub'];
        $villeC = $value['villeClub'];
        $telC = $value['telClub'];
        $mailC = $value['mailClub'];


        echo "Modifier le club ".$idC."";

?>
<fieldset>
        <form name="FRM_modif_club" method="POST" action="index.php?uc=gerer_club&action=valideUpdate">
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
                        echo "Adresse :";
                    echo "</td>";

                    echo "<td align=right>";
                        echo "<input type='text' name='adresseClub' value='".$adrC."'/>";
                    echo "</td>";
                echo "</tr>";


                echo "<tr>";
                    echo "<td>";
                        echo "Code Postale :";
                    echo "</td>";

                    echo "<td align=right>";
                        echo "<input type='text' name='cpClub' value='".$cpC."' size=5/>";
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


                echo "<tr>";
                    echo "<td>";
                        echo "Mail du Club :";
                    echo "</td>";

                    echo "<td align=right lenght=50>";
                        echo "<input type='text' name='mailClub' value='".$mailC."'/>";
                    echo "</td>";
                echo "</tr>";

            echo "</table>";
            echo "<br />";
    ?>

            <input type="hidden" name="idClub" value="<?php echo $idC?>">

            <br />
            <input type="submit" name="UpdateClub" value="MODIFIER"></a>
		</form>

    <form name="FRM_modif_retour" method="POST" action="index.php?uc=gerer_club&action=voirClub">
        <input type="submit" value="RETOUR"/>
    </form>

</fieldset>

<?php
    }
?>