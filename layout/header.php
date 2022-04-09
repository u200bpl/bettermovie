<?php include 'head.php' ?>

<?php
    // Query
    require_once './backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<header>
    <nav>
        <div class="wrapper">
            <div class="navbar">
                <div class="navleft">
                    <a href="index.php"><h1><span>Better</span>movie</h1></a>
                    <a href="index.php" class="active">Homepage</a>
                    <a href="">Movies</a>
                    <a href="">Series</a>
                    <a href="">My list</a>
                </div>

                <div class="navright">
                    <i class="navicons fa-solid fa-magnifying-glass"></i>
                    <i class="navicons fa-solid fa-bell"></i>
                    <i class="navicons fa-solid fa-user"></i>
                </div>
            </div>
        </div>
    </nav>