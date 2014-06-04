<table border="1">
    <?php
    // Cette boucle effectue la même action individuelement pour chaque ligne du tableau. Ici, elle stoque le contenu de chaque cellule de la ligne traitée, puis l'affiche dans un tableau HTML
    foreach($lesClubs as $i )
    {
        $nom=$i['nomClub'];
        $ville=$i['villeClub'];
        $telephone=$i['telClub'];
        $id=$i['idClub'];

        ?>

        <tr>
            <td>
                <!--Affichage du résultat, ligne par ligne-->
                <?php
                    echo "<input type=hidden name=idClub value='".$id."'>". $nom."</td><td>".$ville."</td><td>".$telephone."</td>"
                    //if(isset($_SESSION['membre']))
                     //{
                        ."<td><a href='index.php?uc=gerer_club&action=modifier_club&id=".$id."'> MODIFIER </a></td> <td><a href='index.php?uc=gerer_club&action=supprimer_club&id=".$id."'> SUPPRIMER </a></td>";
                     //}
                ?>

            </td>
        </tr>

    <?php
    }
    ?>
</table>
<br />
<form name=ajout_club method=POST action=index.php?uc=gerer_club&action=ajout_club>
    <input type=submit value="Ajouter un Club" name=ajout_club>
</form>