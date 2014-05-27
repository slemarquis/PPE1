<table border="1">
    <?php
    // Cette boucle effectue la même action individuelement pour chaque ligne du tableau. Ici, elle stoque le contenu de chaque cellule de la ligne traitée, puis l'affiche dans un tableau HTML
    foreach($lesClubs as $i )
    {
        $nom=$i['nomClub'];
        $adresse=$i['adresseClub'];
        $cp=$i['cpClub'];
        $ville=$i['villeClub'];
        $telephone=$i['telClub'];
        $mail=$i['mailClub'];
        $id=$i['idClub'];
        echo var_dump($id);

        ?>

        <tr>
            <td>
                <!--Affichage du résultat, ligne par ligne-->
                <?php
                    echo $nom."</td><td>".$adresse."</td><td>".$cp."</td><td>".$ville."</td><td>".$telephone."</td><td>".$mail."</td>"
                   // if(isset($_SESSION))
                    //{
                        ."<td><a href='index.php?uc=gerer_club&action=modifier_club&id=".$id."'>Modifier</a></td> <td><a href='index.php?uc=supprimer&id=".$id."'>Supprimer</a>";
                    //}
                ?>

            </td>
        </tr>

    <?php
    }
    ?>
</table>