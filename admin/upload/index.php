<?php
    require_once '../../header.php';
    require_once '../../backend/config.php';

    // session_start();
    // if($_SESSION['user_rol'] < 10) {
    //     header("location: ../../index.php");
    // }

    // Query
    require_once '../../backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="upload">
    <form action="../../backend/controllers/uploadController.php" method="POST">
        <div class="form">
            <div class="form-group">
                <label for="name">Movie name:</label><br>
                <input type="text" id="name" name="name" placeholder="Uncharted">
            </div>

            <div class="form-group">
                <label for="desc">Description:</label><br>
                <input type="text" id="desc" name="desc" placeholder="Street-smart Nathan Drake is recruited by seasoned treasure hunter Victor Sully Sullivan to recover a fortune amassed by Ferdinand Magellan, and lost 500 years ago by the House of Moncada.">
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label><br>
                <input type="text" id="genre" name="genre" placeholder="action">
            </div>

            <div class="form-group">
                <label for="dur">Duration:</label><br>
                <input type="number" id="dur" name="dur" placeholder="116">
            </div>

            <div class="form-group">
                <label for="banner">Banner:</label><br>
                <input type="text" id="banner" name="banner" placeholder="uncharted">
                <!-- <input type="file" id="banner" name="banner" placeholder="uncharted"> -->
            </div>

            <div class="form-group">
                <label for="year">Release Year:</label><br>
                <input type="number" id="year" name="year" placeholder="2022">
            </div>

            <div class="form-group">
                <label for="trailer">Trailer:</label><br>
                <input type="text" id="trailer" name="trailer" placeholder="eHp3MbsCbMg">
            </div>

            <div class="form-group">
                <label for="iframe">Iframe:</label><br>
                <input type="text" id="iframe" name="iframe" placeholder="tt1464335">
            </div>

            <div class="form-group">
                <label for="quality">Quality:</label><br>
                <input type="text" id="quality" name="quality" placeholder="SD">
            </div>
        </div>

        <div class="addbtn">
            <input type="submit" value="Add movie">
        </div>
    </form> 
</div>

<?php require_once '../../footer.php'; ?>