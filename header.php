<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once 'head.php'; ?>
    </head>
<body>   
<?php
    // Query
    require_once 'backend/conn.php';
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
                    <a href="<?php echo $base_url; ?>/index.php"><h1><span>Better</span>movie</h1></a>
                    <a href="<?php echo $base_url; ?>/index.php" class="active">Homepage</a>
                    <a href="movies.php">Movies</a>
                    <a href="">Series</a>
                    <!-- <a href="">My list</a> -->
                </div>

                <div class="navright">
                    <div class="search-container">
                        <form action="#">
                            <div class="search-box">
                                <i class="search-box__icon fa-solid fa-magnifying-glass"></i>
                                <input class="search-box__input" placeholder="Title, genres, persons"/ name="search">
                            </div>
                        </form>
                    </div>
                    
                    <a href="#"><i class="navicons fa-solid fa-bell"></i></a>
                    <a href="<?php echo $base_url; ?>/account.php"><i class="navicons fa-solid fa-user"></i></a>
                    <?php if($users['userrol'] >= 10) { ?>
                        <a href="<?php echo $base_url; ?>/admin/upload/"><i class="navicons fa-solid fa-arrow-up-from-bracket"></i></a>
                    <?php } ?>
                    <a href="<?php echo $base_url; ?>/logout/"><i class="navicons fa-solid fa-arrow-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
    </nav>
</div>