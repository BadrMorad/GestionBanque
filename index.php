<?php

include 'Titulaire.php'; // Inclure le fichier Titulaire.php
include 'CompteBancaire.php'; // Inclure le fichier CompteBancaire.php

// Créer une instance de Titulaire
$titulaire = new Titulaire("Morad", "Badr", "1994-03-09", "brunstatt");

// Créer des instances de CompteBancaire
$compte1 = new CompteBancaire("Compte Courant", 500, "€", $titulaire);
$compte2 = new CompteBancaire("Livret Jeune", 500, "€", $titulaire);
$compte3 = new CompteBancaire("Livret PEL", 500, "€", $titulaire);
$compte4 = new CompteBancaire("Livret Bloqué", 500, "€", $titulaire);

// Afficher les comptes
echo $compte1;
echo $compte2;
echo $compte3;
echo $compte4;

// var_dump($compte1);

// var_dump($compte2);

// var_dump($compte3);

// var_dump($compte4);

?> 