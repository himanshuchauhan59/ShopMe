<?php
include "../dbms/config.php";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 0px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            transition: 1s;
            background: rgba(13, 13, 13, 0.297);
            border-radius: 0px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(94, 91, 91, 0.746);
        }

        * {
            text-transform: capitalize;
            font-family: 'Open Sans', sans-serif;
        }

        div#offcanvasScrolling {
            width: 15em;
        }

        .logo {
            width: 4.3em;
            height: 2em;
        }

        .btn {
            margin: 10px 10px;
            font-weight: 700;
        }

        .offcanvas-body .row .col .btn:hover {
            color: white;
        }

        .offcanvas-body .row .col .btn {
            width: 100%;
            margin-top: 1%;
            position: relative;
            margin-left: 0%;
        }


        .offcanvas-body .row .col .btn:focus {
            background-color: white;
            color: black;
            border: none;
        }

        #button1 {
            margin: 0px 1px;
            width: 194px;
        }

        ul.dropdown-menu.show {
            width: 12em;
        }

        a.dropdown-item {
            color: black;
            font-weight: 900;
        }
    </style>
</head>

<body class="bg-dark">
    <!-- header start -->
    <div class="container-fluid border-bottom border-light d-flex justify-content-between">
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>
        <?php
        session_start();

        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $select = "SELECT * FROM `user` WHERE `user`.`id` = $id ";
            $result = mysqli_query($obj->connection, $select);
            $row = mysqli_fetch_row($result);
            if ($row[7] == 'Admin') {
                echo "<h4 class='text-light my-3'>$row[1]|$row[7]</h4>";
                $_SESSION['user'] = 1;
            } else if ($row[7] == 'vice-admin') {
                echo "<h4 class='text-light my-3'>$row[1]|$row[7]</h4>";
                $_SESSION['user'] = 2;
            } else if ($row[7] == 'employee') {
                echo "<h4 class='text-light my-3'>$row[1]|$row[7]</h4>";
                $_SESSION['user'] = 3;
            } else {
                header("Location:index.php");
            }
        ?>
        <?php
        } else {
            header("Location:index.php");
        }
        ?>
    </div>
    <!-- header over -->

    <!-- side bar start -->
    <div class="offcanvas offcanvas-start bg-secondary" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><img class="logo" src="../assets/logo.png"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col">
                    <a href="Dashboard.php"><button class="btn">Dashboard</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <button class="btn dropdown-toggle" id="button1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            Data Insertion
                        </button>
                        <ul class="dropdown-menu text-center">
                            <li><a class="dropdown-item" href="c1.php">Categorie</a></li>
                            <li><a class="dropdown-item" href="p1.php">Product</a></li>
                            <li><a class="dropdown-item" href="b1.php">Brand</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="sell.php"><button class="btn">Sell</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="user.php"><button class="btn">Users</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="categorie.php"><button class="btn">Categorie</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="brand.php"><button class="btn">Brands</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="data.php"><button class="btn">data</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="stock.php"><button class="btn">Stock</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="member.php"><button class="btn">Member</button></a>
                </div>
            </div>
            <?php
            if ($_SESSION['user'] == 1) {
            ?>
                <div class="row">
                    <div class="col">
                        <a href="role.php"><button class="btn">Role</button></a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="row">
                <div class="col">
                    <a href="admin_logout.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- side bar start -->
    <!-- main content -->
    <!-- main over -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>