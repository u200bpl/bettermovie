<?php
    require_once 'head.php';
    require_once 'backend/config.php';

    session_start();
    if(isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit;
    }
?>
<header>
    <div class="navbartest">
        <nav>
            <div class="wrapper">
                <div class="navbar">
                    <div class="navleft">
                        <a href="index.php"><h1><span>Better</span>movie</h1></a>
                        <a href="subscriptions.php" class="active">Subscriptions</a>
                    </div>

                    <div class="navright">
                        <div class="lgn-btn">
                            <a href="login/">Sign In</a>   
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="spacer">.</div>
</header>

<main>
    <!-- 
        SUB PLANS
    -->
    <div class="wrapper">
        <div class="plans">
            <div class="plan">
                <div class="planheader">
                    <h5>Free</h5>
                    <p><span>€</span> 0,-</p>
                </div>
                <div class="planinformation">
                    <ul>
                        <li>Resolution: <span>480p</span></li>
                        <li>Access: <span>Limited</span></li>
                        <li>Devices: <span>1</span></li>
                        <li> <span></span></li>
                    </ul>

                    <div class="prch-btn"><button>Purchase</button></div>
                </div>
            </div>

            <div class="plan">
                <div class="planheader">
                    <h5>Basic</h5>
                    <p><span>€</span> 4,99</p>
                </div>
                <div class="planinformation">
                    <ul>
                        <li>Resolution:<span> 1080p</span></li>
                        <li>Access: <span>Unlimited</span></li>
                        <li>Devices: <span>2</span></li>
                        <li> <span></span></li>
                    </ul>

                    <div class="prch-btn"><button>Purchase</button></div>
                </div>
            </div>

            <div class="plan">
                <div class="planheader">
                    <h5>Ultimate</h5>
                    <p><span>€</span> 14,99</p>
                </div>
                <div class="planinformation">
                    <ul>
                        <li>Resolution:<span> 4K+HDR</span></li>
                        <li>Access: <span>Unlimited</span></li>
                        <li>Devices: <span>6</span></li>
                        <li> <span></span></li>
                    </ul>

                    <div class="prch-btn"><button>Purchase</button></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'footer.php' ?>