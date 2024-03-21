<?php

function verifPassword($mdp): bool
{
    $points_total = 10;
    $longueur = strlen($mdp); // nombre de caractères de $mdp

    $points_long=0; // points pour la longueur, soit 0, soit 1
    $points_comp=0; // points pour la complexité

    if ($longueur >=12) { $points_long=1; }

    if(preg_match("/[a-z]/", $mdp)) { $points_comp=$points_comp+1; }
    if(preg_match("/[A-Z]/", $mdp)) { $points_comp=$points_comp+2; }
    if(preg_match("/[0-9]/", $mdp)) { $points_comp=$points_comp+3; }
    if(preg_match("/\W/",$mdp)) { $points_comp=$points_comp+4; }

    $resultat = $points_long * $points_comp;
    return ($points_total == $resultat);
}