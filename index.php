<?php

//Caractéristique des personnages 
class Personnage {
    private $nom;
    private $force;
    private $niveau;
    private $sante;
    private $mort;

    public function caracteristique () {
        $etat = ($this->mort)? "mort" : "vivant";
        echo $this->nom ." a une force de ".$this->force." et est au niveau ".$this->level. ", sont état de santé est de: ".$this->sante." points  sur 100, votre héro est donc ".$etat. "<br>";
        }

        function getNom(): string {
            return $this->nom;
        }

        function setNom(string $nom) {
            $this->nom = $nom;
        }

        function getForce(): int {
            return $this->force;
        }

        function setForce(int $force) {
            $this->force = $force;
        }

        function getLevel(): int {
            return $this->level;
        }

        function setLevel(int $level) {
            $this->level = $level;
        }

        function getSante(): int {
            return $this->sante;
        }

        function setSante(int $sante) {
            $this->sante = $sante;
            if($this ->sante < 1) {
                $this->setMort(true);
            }else {
                $this->setMort(false);
            }
        }

        function getMort(): bool {
            return $this->mort;
        }

        function setMort(int $mort) {
            if($this->sante < 1) {
                $this->mort = true;
            } else {
                $this->mort = false;
            }
        }
        
        function attaquer(Personnage $perso) {
            $perso->setSante($perso->getSante() - $this->force);
            $perso->setMort(); 
        }
}

//Fiche des persos
$perso1 = new Personnage();
$perso1->setNom("Grüdu");
$perso1->setForce(15);
$perso1->setLevel(1);
$perso1->setSante(100);



$perso2 = new Personnage();
$perso2->setNom("Snawen");
$perso2->SetForce(10);
$perso2->SetLevel(1);
$perso2->SetSante(75);



$perso3 = new Personnage();
$perso3->setNom("Jean-Clude");
$perso3->setForce(14);
$perso3->setLevel(1);
$perso3->setSante(0);

// Truc en attente 
/*$perso1 = new Personnage("Grüdu",)
$perso2 = new Personnage('')
$perso3 = new Personnage('')*/

echo "Avant l'attaque : ";
$perso2->caracteristique();
$perso1->attaquer($perso2);
echo "Après l'attaque : ";
$perso2->caracteristique();