<?php
if (isset($_POST['Add'])) {

    $image = $_FILES['image']['name'];
    $name = $_POST['b_name'];

    $image_file = $_FILES['image']['tmp_name'];
    $folder = "../assets/brand/" . $image;
    $sql = "INSERT INTO `brand`(`image` , `b_name`) VALUES ('$image' , '$name')";

    $result = mysqli_query($obj->connection, $sql);
    //  
    if ($result && move_uploaded_file($image_file, $folder)) {
?>
        <script>
            alert("data are successfully inserted <?php echo $name ?>");
        </script>
<?php
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h1 class="h1 text-info border-bottom border-info mb-4">Brand Adding</h1>
            <div class="input-group mb-3">
                <input type="file" class="form-control border-success" id="inputGroupFile02" required name="image">
                <label class="input-group-text" for="inputGroupFile02">Image</label>
            </div>
            <label class="form-label">Enter Your Brand</label>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control border-success my-2" placeholder="enter your brand name" name="b_name">
                </div>
                <div class="col-2">
                    <input type="submit" class="btn btn-warning float-end w-100 my-2" name="Add">
                </div>
            </div>
        </form>

    </div>


    <div>
        <script src="https://cdn.jsdelivr.net/i]npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </div>
</body>

</html>