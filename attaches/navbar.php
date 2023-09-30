<!doctype html>
<html lang="en">
<?php include "../dbms/config.php";
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopMe </title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./glide.core.min.css">
    <link rel="stylesheet" href="./glide.theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../index/mainsection.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        #name {
            border-radius: 20px;
            text-transform: none;
            text-decoration: none;
        }

        .bg-color-navbar {
            background:pink !important ;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg fixed-top bg-color-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../assets/logo.png" style="width: auto;height: 30px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../assets/logo.png"
                                style="width: 60px;height: 30px;"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body bg-color-navbar">
                        <form class="d-flex ms-2" role="search">
                            <input class="form-control me-2 w-125 h-100" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-warning" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../index/mainsection.php"><i
                                        class="fa-solid fa-house"></i>
                                    Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../menu/services.php"><i
                                        class="fa-solid fa-bars-progress"></i> Services</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../menu/team.php"><i class="fa-solid fa-briefcase"></i> Our
                                    Team</a>
                            </li>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../menu/about.php"><i class="fa-solid fa-address-card"></i>
                                    About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../menu/contactus.php"><i class="fa-solid fa-id-badge"></i>
                                    Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../shoping_system/My_cart.php"><i
                                        class="fa-solid fa-cart-shopping"></i> Cart</a>
                            </li>
                            <?php

                            if (isset($_SESSION['user'])) {
                                ?>

                                <span id="dummy" style="display: none;">
                                    <?php echo $_SESSION['email'] ?>
                                </span>
                                <a href="../login sys/logout.php">
                                    <p class="text-dark my-1 px-3 text-center bg-warning p-1" id="name">S</p>
                                </a>
                                <!-- <script>
                                    let txt = document.getElementById('name');
                                    let name = document.getElementById('dummy').innerHTML;
                                    let Sub_name = name.toUpperCase();
                                    let split_name = Sub_name.split('');
                                    txt.innerHTML = split_name[0];
                                </script> -->
                                <?php
                            } else {
                                ?>

                                <li class="nav-item">
                                    <button type="button" class="btn btn-light float-end" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Login/SignUp
                                    </button>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="nav2">
            <div class="nav" id="nav">
                <a href="#" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">All <i class="fa-solid fa-angles-right" id="all"></i></a>
                <a href="../attaches/categories.php?Categorie=Mobile" class="nav-link">Mobile</a>
                <a href="../attaches/categories.php?Categorie=Laptop" class="nav-link">Laptop</a>
                <a href="../attaches/categories.php?Categorie=T.V" class="nav-link">T.V.</a>
                <a href="../attaches/categories.php?Categorie=Refrigerator" class="nav-link">Refrigerator</a>
                <a href="#" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">More..</i></a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-secondary">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p>This Button Redirect The Login Page You can Login Our Webpage</p>
                        </div>
                        <div class="col-lg-4"><a href="../login sys/system.php?sys=16509104700002"><button
                                    class="btn btn-outline-light">Login Page</button></a></div>
                    </div>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p>This Button Redirect The SignUp Page You can SignUp Our Webpage</p>
                        </div>
                        <div class="col-lg-4"><a href="../login sys/system.php?sys=52334964549527"><button
                                    class="btn btn-outline-warning">SignUp Page</button></a></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasTopLabel"><img src="../assets/logo.png"
                    style="width: auto;height: 30px;"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <?php
                $sql = "SELECT * FROM `categorie`";
                $result = mysqli_query($obj->connection, $sql);

                while ($row = mysqli_fetch_row($result)) {
                    ?>
                    <div class="col-3 my-1 ">
                        <a href="http://localhost/jp%20tech/attaches/categories.php?Categorie=<?php echo $row[1] ?>"
                            style="text-decoration: none;" class="text-dark border-bottom border-dark">
                            <?php echo $row[1] ?>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdn.jsdelivr.net/i]npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>