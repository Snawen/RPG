<?php

class Personnage {
    public $nom;
    public $force;
    public $niveau;
    public $sante;
    public $mort;

    public function caracteristique () {
        $etat = ($this->mort)? "mort" : "vivant";
        echo $this->nom ." a une force de ".$this->force." et est au niveau ".$this->level. ", sont état de santé est de: ".$this->sante." points  sur 100, votre héro est donc ".$etat;
        }
}

$perso1 = new Personnage();
$perso1->nom = "Grüdu";
$perso1->force= 15;
$perso1->level = 1;
$perso1->sante = 100;
$perso1->mort = false;


$perso2 = new Personnage();
$perso2->nom = "Snawen";
$perso2->force= 10;
$perso2->level = 1;
$perso2->sante = 75;
$perso2->mort = false;


$perso3 = new Personnage();
$perso3->nom = "Jean-Clude";
$perso3->force= 14;
$perso3->level = 1;
$perso3->sante = 0;
$perso3->mort = true;


$perso1->caracteristique();
$perso2->caracteristique();
$perso3->caracteristique();