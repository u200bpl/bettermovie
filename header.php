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
                    <div class="dropdown">
                        <button onclick="dropDown2()" class="dropbtn2">Movies</button>
                        <div id="myDropdown2" class="dropdown-content2">
                            <div class="drop2">
                                <div class="dropsection">
                                    <h5>Collection</h5>
                                    <div class="droptext2">
                                        <a href="<?php echo $base_url; ?>/movie">Marvel</a>
                                        <a href="<?php echo $base_url; ?>/movie">Harry Potter</a>
                                    </div>
                                </div>

                                <div class="dropsection">
                                    <h5>Genres</h5>
                                    <div class="droptext2">
                                        <a href="<?php echo $base_url; ?>/movie">Action</a>
                                        <a href="<?php echo $base_url; ?>/movie">Anime</a>
                                        <a href="<?php echo $base_url; ?>/movie">Comedies</a>
                                        <a href="<?php echo $base_url; ?>/movie">Crime</a>
                                        <a href="<?php echo $base_url; ?>/movie">Documentaries</a>
                                        <a href="<?php echo $base_url; ?>/movie">Dramas</a>
                                        <a href="<?php echo $base_url; ?>/movie">Fantasy</a>
                                        <a href="<?php echo $base_url; ?>/movie">Horror</a>
                                        <a href="<?php echo $base_url; ?>/movie">Independent</a>
                                        <a href="<?php echo $base_url; ?>/movie">International</a>
                                        <a href="<?php echo $base_url; ?>/movie">Kids & Family</a>
                                        <a href="<?php echo $base_url; ?>/movie">Music & Musicals</a>
                                        <a href="<?php echo $base_url; ?>/movie">Romance</a>
                                        <a href="<?php echo $base_url; ?>/movie">Sci-Fi</a>
                                        <a href="<?php echo $base_url; ?>/movie">Sports</a>
                                        <a href="<?php echo $base_url; ?>/movie">Stand-up Comedy</a>
                                        <a href="<?php echo $base_url; ?>/movie">Thriller</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button onclick="dropDown3()" class="dropbtn3">Series</button>
                        <div id="myDropdown3" class="dropdown-content3">
                            <div class="drop3">
                                <div class="dropsection">
                                    <h5>Genres</h5>
                                    <div class="droptext3">
                                        <a href="<?php echo $base_url; ?>/movie">Action</a>
                                        <a href="<?php echo $base_url; ?>/movie">Anime</a>
                                        <a href="<?php echo $base_url; ?>/movie">Comedies</a>
                                        <a href="<?php echo $base_url; ?>/movie">Crime</a>
                                        <a href="<?php echo $base_url; ?>/movie">Critics' Picks</a>
                                        <a href="<?php echo $base_url; ?>/movie">Documentaries</a>
                                        <a href="<?php echo $base_url; ?>/movie">Dramas</a>
                                        <a href="<?php echo $base_url; ?>/movie">Fantasy</a>
                                        <a href="<?php echo $base_url; ?>/movie">Horror</a>
                                        <a href="<?php echo $base_url; ?>/movie">Independent</a>
                                        <a href="<?php echo $base_url; ?>/movie">International</a>
                                        <a href="<?php echo $base_url; ?>/movie">Kids & Family</a>
                                        <a href="<?php echo $base_url; ?>/movie">Music & Musicals</a>
                                        <a href="<?php echo $base_url; ?>/movie">Romance</a>
                                        <a href="<?php echo $base_url; ?>/movie">Sci-Fi</a>
                                        <a href="<?php echo $base_url; ?>/movie">Sports</a>
                                        <a href="<?php echo $base_url; ?>/movie">Stand-up Comedy</a>
                                        <a href="<?php echo $base_url; ?>/movie">Thriller</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button onclick="dropDown4()" class="dropbtn4">Sports</button>
                        <div id="myDropdown4" class="dropdown-content4">
                            <div class="drop">
                                <div class="dropsection">
                                    <h5>Formula</h5>
                                    <div class="droptext">
                                        <a href="<?php echo $base_url; ?>/f1">Formula 1</a>
                                        <a href="<?php echo $base_url; ?>/f1">Formula 2</a>
                                        <a href="<?php echo $base_url; ?>/f1">Formula 3</a>
                                        <a href="<?php echo $base_url; ?>/f1">Formula E</a>
                                        <a href="<?php echo $base_url; ?>/f1">Indy 500</a>    
                                    </div>
                                </div>
                                
                                <div class="dropsection">
                                    <h5>???</h5>
                                    <div class="droptext">
                                        <a href="<?php echo $base_url; ?>">???</a>
                                        <a href="<?php echo $base_url; ?>">???</a>   
                                    </div>
                                    
                                </div>

                                <div class="dropsection">
                                    <h5>Others</h5>
                                    <div class="droptext">
                                        <a href="<?php echo $base_url; ?>/f1">MotoGP</a> 
                                        <a href="<?php echo $base_url; ?>/f1">Nascar</a>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <button onclick="dropDown1()" class="dropbtn navicons fa-solid fa-user"></button>
                        <div id="myDropdown1" class="dropdown-content">
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