<form action="../action/data.php" method="post">
    <div class = "form form-id_video">
        <label for ="id_video">Enter the id of the video :</label>
        <input type ="number" name = "id_video" id = "id_video" required placeholder ="100">
    </div>
    <div class = "form form-artist">
        <label for = "artist">Artiste :</label>
        <input type = "text" name = "artist" id = "artist" required placeholder="Jean">
    </div>
    <div class = "form form-second_artist">
        <label for = "second_artist">Deuxième artiste :</label>
        <input type = "text" name = "second_artist" id = "second_artist" placeholder="xxxtentacion">
    </div>
    <div class = "form form-style">
        <h3>Style de la musique</h3>
        <div>
            <label for = "rap">Rap</label>
            <input type = "radio" name = "style" id = "rap" value ="rap">
        </div>
        <div>
            <label for = "rock">Rock</label>
            <input type = "radio" name = "style" id = "rock" value = "rock">
        </div>
        <div>
            <label for = "raprock">Trapnroll</label>
            <input type = "radio" name = "style" id = "raprock" value = "raprock">
        </div>
    </div>
    <div class = "form form-file">
        <label for = "video">Add a file :</label>
        <input type = "file" name = "video" id = "video" required >
    </div>
    <div class = "form form-infos">
        <label for = "infos">Add a story</label>
        <input type = "text" name = "infos" id = "infos" required>
    </div>
    <button>Submit</button>
</form>
<style>
    .form:not(:first-child) {
        margin-top: 30px;
    }
</style>