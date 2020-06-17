<?php
include_once '../includes/pdo.php';
include_once '../includes/files.php';
function newVideo($id_video, $artist,$second_artist, $style, $filename, $infos)
{
    $sql1 = "INSERT INTO video" . " SET id_video=:id_video, artist=:artist, 
 style=:style, filename=:filename, infos=:infos";
    $video = $bdd->connexion->prepare($sql1);
    $video->bindParam(':id_video', $id_video);
    $video->bindParam(':artist', $artist);
    $video->bindParam(':second_artist', $second_artist);
    $video->bindParam(':style', $style);
    $video->bindParam(':filename', $filename);
    $video->bindParam(':infos', $infos);


}
function newRapper($name, $infos)
{
    $sql2 = "INSERT INTO rap" . " SET artist=:rapper, infos=:infos";
    $rap = $this->connexion->prepare($sql2);
    $rap->bindParam(':rapper', $this->$name);
    $rap->bindParam(':infos', $this->$infos);
    if($rap->execute())
        return true;
    else return false;

}
function newRocker($name,$infos)
{
    $sql3 = "INSERT INTO rock" . " SET artist=:rocker, infos=:infos";
    $rock = $this->connexion->prepare($sql3);
    $rock->bindParam(':rocker', $this->$name);
    $rock->bindParam(':infos', $this->$infos);
    if($rock->execute())
        return true;
    else return false;
}
