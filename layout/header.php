<?php
    
    // require_once 'head.php';

    // Query
    require_once './backend/conn.php';
    $query = "SELECT * FROM movies";
    $statement = $conn->prepare($query);
    $statement->execute();
    $movielist = $statement->fetchAll(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM users";
    $statement = $conn->prepare($query);
    $statement->execute();
    $users = $statement->fetch(PDO::FETCH_ASSOC);
?>

<header>
    <div class="navbartest">
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
                    <div class="search-container">
                        <form action="/action_page.php">
                            <div class="search-box">
                                <i class="search-box__icon fa-solid fa-magnifying-glass"></i>
                                <input class="search-box__input" placeholder="Title, genres, persons"/ name="search">
                            </div>
                        </form>
                    </div>
                    
                    <a href="#"><i class="navicons fa-solid fa-bell"></i></a>
                    <a href="account.php"><i class="navicons fa-solid fa-user"></i></a>
                    <?php if($users['userrol'] >= 10) { ?>
                        <a href="admin/upload/"><i class="navicons fa-solid fa-arrow-up-from-bracket"></i></a>
                    <?php } ?>
                    <a href="logout.php"><i class="navicons fa-solid fa-arrow-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    