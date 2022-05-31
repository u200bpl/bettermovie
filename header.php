<?php
    session_start();

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
    <nav>
        <div class="wrapper">
            <div class="navbar">
                <div class="navleft">
                    <a href="<?php echo $base_url; ?>/index.php"><h1><span>Better</span>movie</h1></a>
                    <a href="<?php echo $base_url; ?>/index.php">Homepage</a>
                    <a href="<?php echo $base_url; ?>/movie">Movies</a>
                    <a href="">Series</a>
                    <div class="dropdown">
                        <button onclick="dropDown1()" class="dropbtn">Formule</button>
                        <div id="myDropdown1" class="dropdown-content">
                            <a href="<?php echo $base_url; ?>/f1">Formule 1</a>
                            <a href="<?php echo $base_url; ?>/f2">Formule 2</a>
                        </div>
                    </div>
                    <!-- <a href="">My list</a> -->
                </div>

                <div class="navright">
                    <div class="search-container">
                        <form action="movies.php">
                            <div class="search-box">
                                <i class="dropbtn search-box__icon fa-solid fa-magnifying-glass"></i>
                                <input class="search-box__input" placeholder="Title, genres, persons" name="search">
                            </div>
                        </form>
                    </div>
                    
                    <a href="#"><i class="navicons fa-solid fa-bell"></i></a>                    
                    
                    <div class="dropdown">
                        <button onclick="dropDown2()" class="dropbtn navicons fa-solid fa-user"></button>
                        <div id="myDropdown2" class="dropdown-content">
                            <?php if(!isset($_SESSION['user_id'])) { ?>
                                <a href="<?php echo $base_url; ?>/login"><i class="navicons fa-solid fa-user"></i> Login</a>
                                <a href="<?php echo $base_url; ?>/register"><i class="navicons fa-solid fa-user"></i> Register</a>
                            <?php } else { ?>
                                <a href="<?php echo $base_url; ?>/account/"><i class="navicons fa-solid fa-user"></i> Settings</a>
                                <a href="<?php echo $base_url; ?>/logout/"><i class="navicons fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                                <?php if($users['userrol'] >= 10) { ?>
                                    <a href="<?php echo $base_url; ?>/admin/upload/"><i class="navicons fa-solid fa-arrow-up-from-bracket"></i> Upload</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>