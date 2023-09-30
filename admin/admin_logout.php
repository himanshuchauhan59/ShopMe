<!doctype html>
<html lang="en">
<?php
    if(isset($_REQUEST['log']) == 1)
    {
        session_start();
        session_unset();
        session_destroy(); 
        header("Location:index.php");
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center p-5" style="height: 70vh;">
        <div>
            <h1>Are You Sure About Logout </h1>
        </div>
        <div class="row">
            <div class="col">
                <button onclick="location.href='admin_logout.php?log=1'" class="btn btn-danger w-100" id="logout">Logout</button>
            </div>
            <div class="col">
                <a href="Dashboard.php"><button class="btn btn-dark w-100">Back</button></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>