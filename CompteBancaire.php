<?php
// Classe représentant un compte bancaire
class CompteBancaire {
   private string $_libelle;        
   private float $_soldeInitial;    
   private string $_devise;         
   private  $_titulaire;   
   
   public function __construct($libelle, $soldeInitial, $devise,  $titulaire) {
       $this->_libelle = $libelle;
       $this->_soldeInitial = $soldeInitial;
       $this->_devise = $devise;
       $this->_titulaire = $titulaire;
       $titulaire = new Titulaire("Morad", "Badr", "1994-03-09", "brunstatt");
 }

   // Getter pour le libellé
   public function getLibelle() {
       return $this->_libelle;
   }
   // Setter pour le libellé
   public function setLibelle($libelle) {
       $this->_libelle = $libelle;
   }
   // Getter pour le solde initial
   public function getSoldeInitial() {
       return $this->_soldeInitial;
   }
   // Setter pour le solde initial
   public function setSoldeInitial($soldeInitial) {
       $this->_soldeInitial = $soldeInitial;
   }
   // Getter pour la devise
   public function getDevise() {
       return $this->_devise;
   }
   // Setter pour la devise
   public function setDevise($devise) {
       $this->_devise = $devise;
   }
   // Méthode pour créditer le compte
   public function crediter($montant) {
       $this->_soldeInitial += $montant;
       echo "Le compte a été crédité de {$montant} {$this->_devise}.<br>";
   }
   public function _toString() {
    return "$this->_libelle $this-> soldeInitial $this->_devise<br>";
   }

}
?>

