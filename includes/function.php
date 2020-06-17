<?php
function lire(){
    // On écrit la requête
    $sql = "SELECT *  FROM  video"  ;

    // On prépare la requête
    $query = $this->connexion->prepare($sql);

    // On exécute la requête
    $query->execute();

    // On retourne le résultat
    return $query;
}
