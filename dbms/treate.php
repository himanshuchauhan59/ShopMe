<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <?php
            include "config.php";
            if (isset($_GET['choice'])) {
                switch ($_GET['choice']) {
                    case 1:                                                                                                 
                        echo "<div class='container'>
                        <h1 class='text-center text-success'>Your Data Are Successfully Inserted</h1>
                        <div class='row text-center'>
                            <div class='col-6'>
                                <a href='../admin/p1.php'><button class='btn btn-dark w-100'>Back</button></a>
                            </div>
                            <div class='col-6'>
                            <a href='../admin/Dashboard.php'><button class='btn btn-info w-100'>Admin pannel</button></a>
                            </div>
                        </div>
                    </div>";
                        break;
                    case 2:
                        echo "<div class='container'>
                        <h1 class='text-center text-info'>Your Data Are Successfully Updated</h1>
                        <div class='row text-center'>
                            <div class='col-6'>
                                <button class='btn btn-dark w-100'>Back</button>
                            </div>
                            <div class='col-6'>
                                <button class='btn btn-info w-100'>Admin pannel</button>
                            </div>
                        </div>
                    </div>";
                        break;
                    case 3:
                        echo "<div class='container'>
                        <h1 class='text-center text-danger'>Your Data Are Successfully deleted</h1>
                        <div class='row text-center'>
                            <div class='col-6'>
                                <button class='btn btn-dark w-100'>Back</button>
                            </div>
                            <div class='col-6'>
                                <button class='btn btn-info w-100'>Admin pannel</button>
                            </div>
                        </div>
                    </div>";
                        break;
                }
            }
            ?>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>