<?php
class Files {

    // connexion a la table

    private $connexion;
    private $table = "video";

    // contenu de la base de donnée

    public $id_video;
    public $artist;
    public $second_artist;
    public $style;
    public $filename;
    public $infos;

    // connexion a la base de donnée

    public function __construct($bdd)
    {  $this->connexion($bdd);
    }
}