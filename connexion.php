<?php
    require ("connect.php");

    function connectToDB(){
        $dsn = "mysql:dbname=" . BASE . "; host=" . SERVER;

        try{
            $connexion = new PDO($dsn, USER, PASSWD);
            echo "Connexion reussie";
        }catch (PDOException $e){
            printf("Echec de connexion a base de donnée. Erreur survenue : %s", $e->getMessage());
            exit();
        }

        return $connexion;
    }
    /* Auto test*/
    connectToDB();