<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin Pannel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .container {
            background-color: #ebc085de;
            border-radius: 10px;
        }

        .btn {
            border: 1px solid #ffffff;
            background: #ebda62;
            width: 45%;
        }

        .component {
            margin-left: 31vw;
            margin-right: 31vw;
            height: 80vh;
        }

        @media screen and (max-width: 950px) {
            .component {
                margin-left: 20vw;
                margin-right: 20vw;
            }
        }

        @media screen and (max-width: 550px) {
            .component {
                margin-left: 15vw;
                margin-right: 15vw;
            }
        }

        @media screen and (max-width: 550px) {
            .component {
                margin-left: 10vw;
                margin-right: 10vw;
            }
        }
    </style>
</head>

<body>
    <?php
    include "../dbms/config.php";
    session_start();
    if(isset($_REQUEST['login'])){
    $U_name = $_REQUEST['user'];
    $pass = md5($_REQUEST['pass']);
    $select = "SELECT * FROM `user` WHERE U_name = '" . $U_name . "' AND pass = '" . $pass . "'";
    $sql = mysqli_query($obj->connection, $select);
    $row = mysqli_fetch_row($sql);
    if ($row == NULL) {
        $error = 1;
    } 
    else if($row[7] == 'Admin')
    {
        $_SESSION['id'] = $row[0];
        header("Location:Dashboard.php");
    }
    else if($row[7] == 'vice-admin')
    {
        $_SESSION['id'] = $row[0];
        header("Location:Dashboard.php");
    }
    else if($row[7] == 'employee')
    {
        $_SESSION['id'] = $row[0];
        header("Location:Dashboard.php");
    }
    else {
        ?>
            <script>alert("You are Not Authorize persone")</script> 
        <?php
    }
    } 
    ?>
    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="component d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="container-fluid text-center">
                    <div class="logo border-bottom border-dark mt-1 mb-2">
                        <img src="../assets/logo.png" style="width: 5em;height: 40px;">
                    </div>
                    <p class="text-start mt-3"> Admin Pannel</p>
                    <form class="d-flex flex-column justify-content-center align-items-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="input-group flex-nowrap my-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="user">
                        </div>
                        <div class="input-group flex-nowrap my-2">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" name="pass">
                        </div>
                        <input type="submit" value="Login" class="btn my-1 mb-3" name="login">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        <?php 
            if(isset($error) == 1)
            {
                ?>
                    alert("please Enter valid data");
                <?php
            }
        ?>
    </script>
</body>

</html>