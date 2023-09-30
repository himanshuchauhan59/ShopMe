<?php
include "../dbms/config.php";
session_start();
$_SESSION['sys'] = $_GET['sys'];
if ($_SESSION['sys'] == 16509104700002) {
    // login
    $sub_system = 11253425451;
} else if ($_SESSION['sys'] == 52334964549527) {
    // sign - up
    $sub_system = 11953425455;
} else {
    echo "not";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopMe</title>
    <link rel="stylesheet" href="./glide.core.min.css">
    <link rel="stylesheet" href="./glide.theme.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../index/mainsection.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        ::placeholder {
            color: black;
            font-weight: 600;
        }

        .lab {
            font-weight: 800;
            font-family: 'Open Sans', sans-serif;
        }

        .col-2 {
            border-right: 1px solid black;
        }

        #con_id {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if ($sub_system == 11953425455) {
            echo '        <div class="form mx-5">
            <form action="insert.php?reg=1389437" method="post">
                <div class="h3 my-3">
                    Sign Up
                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control" id="floatingInput" required name="name" placeholder="enter your name" autocomplete="off">
                            <label for="floatingInput" class="lab">Enter Your Name</label>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col col-sm-2">
                            <input type="number" class="form-control" id="con_id" placeholder="+91" name="c_code" required>
                        </div>
                        <div class="col col-sm-9">
                            <input type="number" class="form-control" placeholder="Enter Your mobile number" name="m_num" autocomplete="off" required>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-floating mb-3 mx-1">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="enter your email" autocomplete="off" required>
                                <label for="floatingInput" class="lab">Enter Your Email</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3 mx-1">
                                <input type="password" class="form-control" id="floatingInput" required placeholder="enter your password" name="pass" autocomplete="off">
                                <label for="floatingInput" class="lab">Enter Password</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col my-3">
                        <textarea id="" cols="30" rows="5" class="form-control" placeholder="Enter Your Address" name="add" required></textarea>
                    </div>
                    <hr>
                    <div class="col">
                        <input type="submit" value="Sign Up" class="btn btn-outline-success w-100">
                    </div>
                </div>
            </form>
        </div>';
        }
        ?>
        <?php
        if ($sub_system == 11253425451) {
            if(isset($_SESSION['error']) == 1)
            {
                ?>
                    <script>
                        alert("id and password incorrect");
                    </script>
                <?php
            } 
            echo '<div class="form mx-5">
                <form action="insert.php?reg=1354437" method="post">
                    <div class="h3 my-3">
                        Login
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <div class="form-floating mb-3 mx-1">
                                <input type="Email" class="form-control" id="floatingInput" required name="email" autocomplete="off">
                                <label for="floatingInput" class="lab">Enter Email</label>
                            </div>
                        </div>
                        <hr>
                        <div class="col">
                            <div class="form-floating mb-3 mx-1">
                                <input type="password" class="form-control" id="floatingInput" name="pass" autocomplete="off" required>
                                <label for="floatingInput" class="lab">Enter Password</label>
                            </div>
                        </div>                    
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Login" class="btn btn-info float-end">
                            </div>
                        </div>
                    </div>
                </form>
            </div>';
        }
        ?>
    </div>
</body>

</html>