<?php

include 'Titulaire.php'; // Charge la définition de la classe Titulaire depuis le fichier Titulaire.php

include 'CompteBancaire.php'; // Charge la définition de la classe Compte depuis le fichier CompteBancaire.php

// Créer une instance de la classe Titulaire avec les informations d'un nouvel auteur

$titulaire = new Titulaire("Morad", "Badr", "1994-03-09", "brunstatt"); 

// Ici, on crée un nouvel objet Titulaire en lui passant le prénom, le nom et la date de naissance et la ville

$compte1 = new CompteBancaire("Compte Courant", 500, "€", $titulaire);

$compte2 = new CompteBancaire("Livret Jeune", 500, "€", $titulaire);

$compte3 = new CompteBancaire("Livret PEL", 500, "€", $titulaire);

$compte4 = new CompteBancaire("Livret Bloqué", 500, "€", $titulaire);

// echo "$titulaire, " . $titulaire->getAge() . " ans.<br>";
// var_dump($compte1);

echo $compte1 ;

// var_dump($compte1);

// var_dump($compte2);

// var_dump($compte3);

// var_dump($compte4);

?> 