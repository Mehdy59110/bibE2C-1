<?php

class Model{
    //Définir propriétés
    private PDO $bdd;
    //Constructeur 
    public function __construct()
    {
        try{
            $this->bdd = new PDO('mysql:host=localhost;dbname=pn_livres;charset=utf8',  'phpmyadmin', "PNE2Cgrandlille"); 
        }catch (Exception $e){
            echo("connexion impossible :".$e->getMessage());
        }
        var_dump($this->bdd);
    }
    // Définir les méthodes

    }