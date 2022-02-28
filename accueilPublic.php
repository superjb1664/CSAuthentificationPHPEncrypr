<?php
switch($action)
{
    case "" :
        include "Vue_Accueil.php";
        break;
    case "seConnecter":
        include "Vue_SeConnecter.php";
        break;
    case "connexion":
        if (isset($_REQUEST["pseudo"]) && isset($_REQUEST["motDePasse"]))
        {
            $utilisateur = Utilisateur_Selection_ParPseudo($_REQUEST["pseudo"]);
            if(is_null($utilisateur) )
            {
                $msgVue ="Mail inconnue";
                include "Vue_SeConnecter.php";
            }
            else
            {
                if(password_verify($_REQUEST["motDePasse"], $utilisateur["motDePasse"]))
                {
                    $_SESSION["idUser"]=$utilisateur["idUser"];
                    $_SESSION["typeCompte"]=$utilisateur["typeCompte"];
                    $idUser =$utilisateur["idUser"];
                    $typeCompte=$utilisateur["typeCompte"];
                    switch($typeCompte)
                    {
                        case 2 :
                            include"Vue_Accueil_Public.php";
                            break;
                        case 3:
                            include"Vue_Accueil_root.php";
                            break;
                    }
                }
                else
                {
                    $msgVue ="mdp erroné inconnue";
                    include "Vue_SeConnecter.php";
                }
            }
        }
        else{
            $msgVue ="Il faut renseigner TOUS les champs";
            include "Vue_SeConnecter.php";
        }
        break;
    case "mdpPerdu":
        break;

}