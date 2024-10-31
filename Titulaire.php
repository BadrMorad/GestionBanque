<?php
class Titulaire {
    // Propriétés privées du titulaire
    private $nom;            
    private $prenom;         
    private $dateNaissance;  
    private $ville;    


    // Constructeur pour initialiser un titulaire
    public function __construct($nom, $prenom, $dateNaissance, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance); 
        $this->ville = $ville;
    }

    // Méthode pour obtenir le nom du titulaire
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour obtenir le prénom du titulaire
    public function getPrenom() {
        return $this->prenom;
    }

    // Méthode pour obtenir la date de naissance du titulaire
    public function getDateNaissance() {
        return $this->dateNaissance->format('Y-m-d'); // Formate la date
    }

    // Méthode pour calculer l'âge du titulaire
    public function getAge() {
        $aujourdhui = new DateTime(); 
        $age = $aujourdhui->diff($this->dateNaissance); 
        return $age->y; 
    }

    // Méthode pour obtenir la ville du titulaire
    public function getVille() {
        return $this->ville;
    }

    // Méthode pour définir un nouveau nom pour le titulaire
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Méthode pour définir un nouveau prénom pour le titulaire
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // Méthode pour définir une nouvelle date de naissance pour le titulaire
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    // Méthode pour définir une nouvelle ville pour le titulaire
    public function setVille($ville) {
        $this->ville = $ville;
    }

    // Méthode pour retourner une représentation sous forme de chaîne de caractères du titulaire
    public function __toString() {
        return "Nom: " . $this->nom . ", Prénom: " . $this->prenom . ", Date de naissance: " . $this->getDateNaissance() . ", Ville: " . $this->ville;
    }
}
?>

