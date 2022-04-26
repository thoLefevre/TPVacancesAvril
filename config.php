<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=Film;charset=utf8;port=3306", "root", "root");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }