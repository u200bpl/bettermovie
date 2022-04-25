<?php
    require_once '../../header.php';
    require_once '../../backend/config.php';

    // session_start();
    // if(!$_SESSION['userrol'] < 10) {
    //     header("Location: ../../index.php");
    //     exit;
    // }

    // Query
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="upload">
    <form action="../../backend/controllers/uploadController.php">
        <div class="form">
            <div class="form-group">
                <label for="name">Movie name:</label><br>
                <input type="text" id="name" name="name" placeholder="Movie Name">
            </div>

            <div class="form-group">
                <label for="desc">Description:</label><br>
                <input type="text" id="desc" name="desc" placeholder="Movie Description">
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label><br>
                <input type="text" id="genre" name="genre" placeholder="Movie Genre">
            </div>

            <div class="form-group">
                <label for="banner">Banner:</label><br>
                <input type="text" id="banner" name="banner" placeholder="Movie Banner">
            </div>

            <div class="form-group">
                <label for="dur">Duration:</label><br>
                <input type="text" id="dur" name="dur" placeholder="Movie Duration">
            </div>

            <div class="form-group">
                <label for="year">Release Year:</label><br>
                <input type="text" id="year" name="year" placeholder="Movie Release Year">
            </div>

            <div class="form-group">
                <label for="trailer">Trailer:</label><br>
                <input type="text" id="trailer" name="trailer" placeholder="Movie Trailer">
            </div>

            <div class="form-group">
                <label for="iframe">Iframe:</label><br>
                <input type="text" id="iframe" name="iframe" placeholder="Movie Iframe Link">
            </div>

            <div class="form-group">
                <label for="quality">Quality:</label><br>
                <input type="text" id="quality" name="quality" placeholder="Movie Quality">
            </div>
        </div>

        <div class="addbtn">
            <input type="submit" value="Add movie">
        </div>
    </form> 
</div>

<?php require_once '../../footer.php'; ?>