
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container my-4">

            <div>
                <h1 class="text-info border-bottom border-info">Product form</h1>
            </div>

            <form action="../dbms/operation.php" method="post" enctype="multipart/form-data" class="form mx-4">
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" required name="image">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control" id="floatingInput" required placeholder="enter product Name" name="p_name">
                            <label for="floatingInput"> Product Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="brand">
                            <?php
                            $sql = "SELECT * FROM `brand`";
                            $result = mysqli_query($obj->connection, $sql);
                            while ($row = mysqli_fetch_row($result)) { 
                                ?>
                                    <option><?php echo $row[2]?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Mprice" name="price" placeholder="enter product price" onkeyup="calculation()" required>
                            <label for="floatingInput">Enter price</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Discount" name="discount" placeholder="enter product discount" onkeyup="calculation()" required>
                            <label for="floatingInput">Discount</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <input type="number" class="form-control" id="tAmmount" name="tammount" placeholder="Total amount" readonly>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="product information" id="floatingTextarea2" style="height: 100px" name="pinfo"></textarea>
                            <label for="floatingTextarea2">product Information</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="product  Description" id="floatingTextarea2" style="height: 100px" name="pdes"></textarea>
                            <label for="floatingTextarea2">product Description</label>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <label>Categories</label>
                        <select class="form-select" multiple aria-label="multiple select example" name="select">
                        <?php
                            $sql = "SELECT * FROM `categorie` ORDER BY 'ID'";
                            $result = mysqli_query($obj->connection, $sql);
                            while ($row = mysqli_fetch_row($result)) { 
                                ?>
                                    <option><?php echo $row[1]?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn w-100 btn-outline-success" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="../dbms/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>