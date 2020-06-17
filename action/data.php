<?php
// reset la valeur s'il y'en a une
 if (isset($_GET['artist']) && isset($_GET['style']) && isset($_GET['filename'])) {
     $data = [
         'id_video' => null,
         'artist' => null,
         'second_artist' =>null,
         'style' => null,
         'filename' => null,
         'infos' => null
     ];
 }
 // ajouter la nouvelle valeur



// Insert into la bdd

 echo newVideo($data);