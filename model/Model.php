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
            $message = "connexion impossible - réessayer ultérieurement ";
             header ("location: ../controller/homeController.php?message=$message");
        }
        
    }

    public function getAllBooks() {
        //On écrit la requête SQL dans une variable
        $sql = "SELECT *FROM book_vw";
        //On appliquer cette sql dans une variable
        $query = $this->bdd->prepare($sql);
        //On exécute la requête
        $query->execute([]);
        //On récupère les résutats dans une vaiable 
        $result = $query->fetchAll();

        //retournant le résultat
        return $result;

    }

    public function getUserByEmail($email) {
         //On écrit la requête SQL dans une variable
        $sql = "SELECT id, mail, mdp, user_name FROM user WHERE mail = :email";
        //On appliquer cette sql dans une variable
        $query = $this->bdd->prepare($sql);
        //On exécute la requête
        $query->execute([
        "email" => $email
        ]);
        //On récupère les résutats dans une vaiable 
        $result = $query->fetch();

        //retournant le résultat
        return $result;
    }
    // Définir les méthodes

    }