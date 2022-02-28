<?php

function Creer_Connexion()
{
    $instancePdo = new PDO('mysql:host=127.0.0.1;dbname=cafe;charset=UTF8',  "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
    return $instancePdo;
}


function Utilisateur_Selection_ParPseudo($pseudo, $motDePasseClair)
{
    $connexion = Creer_Connexion();

    $requetePreparee = $connexion->prepare('select * from `utilisateur` where pseudo = :paramPseudo');
    $requetePreparee->bindParam('paramPseudo', $pseudo);
    $reponse = $requetePreparee->execute(); //$reponse boolean sur l'état de la requête
    $utilisateur = $requetePreparee->fetch(PDO::FETCH_ASSOC);
    return $utilisateur;

}

function Utilisateur_Creer($pseudo, $motDePasseClair, $typeCompte)
{
    $connexionPDO = Creer_Connexion();
    $requetePreparee = $connexionPDO->prepare(
        'INSERT INTO `utilisateur` ( `pseudo`, `motDePasse`, `typeCompte`)
        VALUES (:parampseudo, :parammotDePasse, :paramtypeCompte);');

    $requetePreparee->bindParam('parampseudo', $pseudo);
    $requetePreparee->bindParam('parammotDePasse', $motDePasseClair);
    $requetePreparee->bindParam('paramtypeCompte', $typeCompte);
    $reponse = $requetePreparee->execute(); //$reponse boolean sur l'état de la requête
    $idUtilisateur = $connexionPDO->lastInsertId();
    return $idUtilisateur;
}
