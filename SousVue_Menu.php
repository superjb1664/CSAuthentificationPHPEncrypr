<table>
        <tr>
            <td><a href='index.php?situation=accueilPublic'>Accueil</a> </td>
            <?php
            switch( $typeCompte)
            {
                case 1:
                    echo "<td><a href='index.php?situation=accueilPublic&action=seConnecter'>Se connecter</a> </td>";
                    break;
                case 2:
                    echo "<td><a href='index.php?situation=accueilPublic&action=seDeconnecter'>Se déconnecter</a> </td>";
                    break;
                case 3:
                    echo "<td><a href='index.php?situation=accueilPublic&action=seDeconnecter'>Se déconnecter</a> </td>";
                    break;

            }


            ?>

        </tr>
    <table>