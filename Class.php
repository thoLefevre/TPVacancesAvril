<?php


highlight_file(__FILE__);

class Film{
    private $id_;
    private $film_;
    private $genre_;
    private $realisateur_;
    private $PDO_ ;



    public function __construct($id,$film,$genre,$realisateur,$pdo){
        $this->id_=$id;
        $this->film_=$film;                         
        $this->genre_ = $genre;
        $this->realisateur_ = $realisateur;
        $this->PDO_ = $pdo;
    }

    public function setFilm(){

        $sql = "select film.id,film.genre,film.realisateur
        from film
        WHERE
        (
            film.id = film.genre
            AND
            film.realisateur= ".$this->id_.")

        );";

        $reponses =$this->PDO_->query( $sql);
        while ($donnees = $reponses->fetch())
        {

            array_push($this->tabfilm_,new Film($donnees['id'],$donnees['film'],$donnees['genre'],$donnees['realisateur'],$this->PDO_));
        } 
    }

    public function getId(){
        return $this->id_;
    }
    public function getfilm(){
        return $this->tabfilm_;
    }
    public function getgenre(){
        return $this->genre_;
    }
    public function getrealisateur(){
        return $this->realisateur_;
    }

}
?>