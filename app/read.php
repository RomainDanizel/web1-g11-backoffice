<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Method: GET");

If($_SERVER['REQUEST_METHOD'] == "GET") {

    function getFile() {
        include_once '../includes/pdo.php';
        $newfiles = $bdd->prepare("SELECT filename FROM video");
        $newfiles->execute();
        $datas = $newfiles->fetchAll();
        $files = [
        ];
        for ($index = 0 ; $index < $datas.length ; $index ++) {
            $data = $datas[$index];
            array_push($files, $data);


        }
        echo json_encode($array);
    }
    function getData() {
        include_once '../includes/pdo.php';
        $newd = $bdd->query("SELECT * FROM video");
        $data = $newd->fetchAll();
        $array = [
            "first" => $data[0],
            "second" => $data[1]
        ];

        echo json_encode($array);
    }

} else {
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}

// Faire une fonction qui récupère tout
// select *
// fetch
// crée un tableau
// fetch -> tableau