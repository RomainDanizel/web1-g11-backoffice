<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Method: GET");


If($_SERVER['REQUEST_METHOD'] == "GET") {
    include_once  '../includes/function.php';
    include_once '../includes/pdo.php';
    include_once '../includes/files.php';
    function getFile() {

        $newfiles = $bdd->prepare("SELECT filename FROM video");
        $newfiles->execute();
        $datas = $newfiles->fetchAll();
        $files = [
        ];
        for ($index = 0 ; $index < $datas.length ; $index ++) {
            $data = $datas[$index];
            array_push($files, $data);


        }


        echo json_encode($files);
    }
    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();
    
// On instancie les datas
    $datas = new Files($db);

    // On récupère les données
    $stmt = $datas->getFiles();

// On vérifie si on a au moins 1 produit
    if($stmt->rowCount() > 0){
        // On initialise un tableau associatif
        $arrayData = [];
        $arrayData['data'] = [];

        // On parcourt les produits
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $prod = [
                "id_video" => $id_video,
                "artist" => $artist,
                "second_artist" => $second_artist,
                "style" => $style,
                "filename" => $filename,
                "infos" => $infos
            ];

            $arrayData['data'][] = $prod;
        }
        // On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($arrayData);
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