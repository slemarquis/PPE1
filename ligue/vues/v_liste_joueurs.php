<table border="1">
    <?php
    // Cette boucle effectue la même action individuelement pour chaque ligne du tableau. Ici, elle stoque le contenu de chaque cellule de la ligne traitée, puis l'affiche dans un tableau HTML
    foreach($lesJoueurs as $i )
    {
        $nom=$i['nomJoueur'];
        $prenom=$i['prenomJoueur'];
        $adresse=$i['adresseJoueur'];
        $telephone=$i['telJoueur'];
        $club=$i['nomClub'];
        $categ=$i['NomCateg'];
        $id=$i['idJoueur'];
        echo var_dump($id);

        ?>

        <tr>
            <td>
                <!--Affichage du résultat, ligne par ligne-->
                <?php
                    echo $prenom."</td><td>".$nom."</td><td>".$adresse."</td><td>".$telephone."</td><td>".$club."</td><td>".$categ."</td>";
                    if(isset($_SESSION))
                    {
                        "<td><a href='index.php?uc=modifier&id=".$id."'>Modifier</a></td> <td><a href='index.php?uc=supprimer&id=".$id."'>Supprimer</a>";
                    }
                ?>

            </td>
        </tr>

    <?php
    }
    ?>
</table>