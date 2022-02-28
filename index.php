<?php
session_start();
include "BDD.php";

if(isset($_SESSION["idUser"]))
{
    $idUser = $_SESSION["idUser"];
    $typeCompte = $_SESSION["typeCompte"];
}
else {
    $idUser = -1;
    $typeCompte = 1;
}


if(isset($_REQUEST["situation"]))
{
    $situation = $_REQUEST["situation"];
    $action  = $_REQUEST["action"];
}
else {
    $situation = "accueilPublic";
    if(isset($_REQUEST["action"]))
        $action  = $_REQUEST["action"];
    else
        $action  = "";
}

switch ($situation)
{
    case "accueilPublic":
        include "accueilPublic.php";
        break;
}


