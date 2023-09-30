<?php

include "admin_pannel.php";

$id = $_REQUEST['id'];
$edit = $_REQUEST['edit'];
$table = $_REQUEST['table'];
$sql = "SELECT * FROM $table WHERE `id` = $id";
$result = mysqli_query($obj->connection, $sql);

if (!$result) {
    echo "<p class='text-warning'>" . mysqli_error($obj->connection) . "</p>";
}

$row = mysqli_fetch_row($result);
// brand = 1
switch ($edit) {
    case 1:
?>
        <div class="container">
            <form action="set.php?id=<?php echo $row[0] ?>" method="post">
                <div class="row">
                    <div class="col-12 my-2 ">
                        <img class="img-thumbnail" src="../assets/brand/<?php echo $row[1] ?>">
                    </div>
                    <div class=" border-bottom border-light"></div>
                    <div class="col my-3">
                        <span class="text-light">Name</span>
                        <input type="text" class="form-control border border-light bg-dark text-light" value="<?php echo $row[2] ?>" name="name">
                    </div>
                    <div class=" border-bottom border-light"></div>
                    <div class="col my-3">
                        <input type="submit" class="btn border border-light bg-dark text-light" value="update" name="brand_set">
                    </div>
                </div>
            </form>
            <a href="./brand.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>

    <?php
        break;
    case 2:
    ?>
        <div class="container">
            <h1 class="text-light">Data</h1>
            <form action="../dbms/operation.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data" class="form mx-4 my-2">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[2] ?>">
                            <label for="floatingInput" class="text-light"> Product Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <select class="form-select bg-dark text-light" aria-label="Default select example" name="brand">
                            <?php
                            $sql = "SELECT * FROM `brand`";
                            $result = mysqli_query($obj->connection, $sql);
                            while ($data = mysqli_fetch_row($result)) {
                            ?>
                                <option><?php echo $data[2] ?></option>
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
                            <input type="number" class="form-control bg-dark text-light" id="Mprice" name="price" placeholder="enter product price" onkeyup="calculation()" value="<?php echo $row[4] ?>" required>
                            <label for="floatingInput" class="text-light">Enter price</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control bg-dark text-light" id="Discount" name="discount" placeholder="enter product discount" onkeyup="calculation()" value="<?php echo $row[7] ?>" required>
                            <label for="floatingInput" class="text-light">Discount</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <input type="number" class="form-control bg-dark text-light" id="tAmmount" name="tammount" placeholder="Total amount" value="<?php echo $row[8] ?>">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product information" id="floatingTextarea2" style="height: 100px" name="pinfo"><?php echo $row[5] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">product Information</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product  Description" id="floatingTextarea2" style="height: 100px" name="pdes"><?php echo $row[6] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">product Description</label>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <label class="text-light">Categories</label>
                        <select class="form-select bg-dark text-light" multiple aria-label="multiple select example" name="select">
                            <?php
                            $sql = "SELECT * FROM `categorie` ORDER BY 'ID'";
                            $result = mysqli_query($obj->connection, $sql);
                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <option><?php echo $row[1] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn w-100 btn-outline-success" name="update">
                    </div>
                </div>
            </form>
            <a href="./data.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>

    <?php
        break;
    case 3:
    ?>
        <div class="container">
            <form action="set.php?id=<?php echo $row[0] ?>" method="post">
                <div class="row my-4">
                    <h1 class="text-light">Categorie</h1>
                    <div class="col my-3">
                        <span class="text-light">Name</span>
                        <input type="text" class="form-control border border-light bg-dark text-light" value="<?php echo $row[1] ?>" name="c_name">
                    </div>
                    <div class=" border-bottom border-light"></div>
                    <div class="col my-3">
                        <input type="submit" class="btn border border-light bg-dark text-light" value="update" name="categorie">
                    </div>
                </div>
            </form>
            <a href="./categorie.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>
    <?php
        break;
    case 4:
    ?>
        <div class="container">
            <h1 class="text-light">User</h1>
            <form action="set.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data" class="form mx-4 my-2">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[1] ?>" disabled>
                            <label for="floatingInput" class="text-light">Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[2] ?>" disabled>
                            <label for="floatingInput" class="text-light">Country Code</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[3] ?>" disabled>
                            <label for="floatingInput" class="text-light">Mobile Num</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[4] ?>" disabled>
                            <label for="floatingInput" class="text-light">Email</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product information" id="floatingTextarea2" style="height: 100px" name="pinfo" disabled><?php echo $row[6] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">address</label>
                        </div>
                    </div>
                    <div class="col">
                        <label class="text-light">Role</label>
                        <select class="form-select bg-dark text-light" name="role">
                            <?php
                            $sql = "SELECT * FROM `role` ORDER BY 'ID'";
                            $result = mysqli_query($obj->connection, $sql);
                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <option><?php echo $row[1] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn w-100 btn-outline-success" name="user">
                    </div>
                </div>
            </form>
            <a href="./user.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>
    <?php
        break;
    case 5: ?>
        <div class="container">
            <h1 class="text-light">User</h1>
            <form action="set.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data" class="form mx-4 my-2">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[1] ?>" disabled>
                            <label for="floatingInput" class="text-light">Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[2] ?>" disabled>
                            <label for="floatingInput" class="text-light">Country Code</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[3] ?>" disabled>
                            <label for="floatingInput" class="text-light">Mobile Num</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[4] ?>" disabled>
                            <label for="floatingInput" class="text-light">Email</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product information" id="floatingTextarea2" style="height: 100px" name="pinfo" disabled><?php echo $row[6] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">address</label>
                        </div>
                    </div>
                </div>
            </form>
            <a href="./sell.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>
    <?php
        break;
    case 6:
    ?>
        <div class="container">
            <h1 class="text-light">Data</h1>
            <form action="../dbms/operation.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data" class="form mx-4 my-2">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[2] ?>" disabled>
                            <label for="floatingInput" class="text-light"> Product Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3 mx-1">
                            <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="enter product Name" name="p_name" value="<?php echo $row[3] ?>" disabled>
                            <label for="floatingInput" class="text-light">brand</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control bg-dark text-light" id="Mprice" name="price" placeholder="enter product price" onkeyup="calculation()" value="<?php echo $row[4] ?>" required disabled>
                            <label for="floatingInput" class="text-light">Enter price</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control bg-dark text-light" id="Discount" name="discount" placeholder="enter product discount" onkeyup="calculation()" value="<?php echo $row[7] ?>" required disabled>
                            <label for="floatingInput" class="text-light">Discount</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <input type="number" class="form-control bg-dark text-light" id="tAmmount" name="tammount" placeholder="Total amount" value="<?php echo $row[8] ?>" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product information" id="floatingTextarea2" style="height: 100px" name="pinfo" disabled><?php echo $row[5] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">product Information</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control bg-dark text-light" placeholder="product  Description" id="floatingTextarea2" style="height: 100px" name="pdes" disabled><?php echo $row[6] ?></textarea>
                            <label for="floatingTextarea2" class="text-light">product Description</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating my-3">
                    <input type="text" class="form-control bg-dark text-light" id="floatingInput" required placeholder="Categorie" name="p_name" value="<?php echo $row[9] ?>" disabled>
                    <label for="floatingInput" class="text-light">Categorie</label>
                </div>
            </form>
            <a href="./sell.php"><button class="btn border border-light bg-dark text-light">back</button></a>
        </div>
<?php
        break;
}
?>