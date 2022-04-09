<?php include 'layout/header.php' ?>

<main>
    <div class="wrapper">
        <div class="rows">
            <?php for ($i = 0; $i < 8; $i++) { ?>
            <div class="movie">
                <a href="movies.php"><img src="style/img/freeguy.jpg" alt="Freeguy img banner"></a>
                <a href="movies.php"><p>Free Guy</p></a>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php include 'layout/footer.php' ?>