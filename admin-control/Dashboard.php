<?php
include "admin_pannel.php";
?>

<div class="container my-5">
    <div class="h2 text-start text-light">Hello <?php echo $row[1] ?>, Welcome To ShopMe  Admin Pannel</div>
    <div class="row my-4">
        <div class="col-md-6">
            <!-- 1 -->
            <div class="card">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    <p class="card-text">Users Information</p>
                    <?php
                    $sql = "SELECT * FROM `user` Where `user`.`Role` = 'Admin'";
                    $sql2 = "SELECT * FROM `user` Where `user`.`Role` = 'vice-admin'";
                    $sql3 = "SELECT * FROM `user` Where `user`.`Role` = 'employee'";
                    $result = mysqli_query($obj->connection, $sql);
                    $result2 = mysqli_query($obj->connection, $sql2);
                    $result3 = mysqli_query($obj->connection, $sql3);
                    $row = mysqli_num_rows($result);
                    $row2 = mysqli_num_rows($result2);
                    $row3 = mysqli_num_rows($result3);
                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-danger text-light rounded-4">
                                    <p class="card-text"> Admin | <?php echo $row ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-dark text-light rounded-4">
                                    <p class="card-text">Vice-admin | <?php echo $row2 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-warning text-dark rounded-4">
                                    <p class="card-text">Employee | <?php echo $row3 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./user.php" class="btn btn-primary">User Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- 2 -->
            <div class="card">
                <div class="card-header">
                    stocks
                </div>
                <div class="card-body">
                    <p class="card-text">stock Information</p>
                    <?php
                    $sql = "SELECT * FROM `data`";
                    $result = mysqli_query($obj->connection, $sql);

                    $row = mysqli_num_rows($result);

                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-success text-light rounded-4">
                                    <p class="card-text">Total Availabel Stock | <?php echo $row ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./data.php" class="btn btn-primary">products</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-6">
            <!-- 1 -->
            <div class="card">
                <div class="card-header">
                    Brands
                </div>
                <div class="card-body">
                    <p class="card-text">Brand Information</p>
                    <?php
                    $sql = "SELECT * FROM `brand` ORDER BY b_name";
                    $result = mysqli_query($obj->connection, $sql);
                    $row = mysqli_num_rows($result);
                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-warning text-dark rounded-4">
                                    <p class="card-text"> Our Brands | <?php echo $row ?></p>

                                </div>
                                <div>
                                    <p class="card-text">
                                        Brands Name
                                    </p>
                                    <ul>
                                        <?php
                                        while ($name = mysqli_fetch_row($result)) {
                                        ?>
                                            <li><?php echo $name[2] ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./brand.php" class="btn btn-primary">Brand Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- 1 -->
            <div class="card">
                <div class="card-header">
                    Brands
                </div>
                <div class="card-body">
                    <p class="card-text">Brand Information</p>
                    <?php
                    $sql = "SELECT * FROM `categorie` ORDER BY name";
                    $result = mysqli_query($obj->connection, $sql);
                    $row = mysqli_num_rows($result);
                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body bg-secondary text-dark rounded-4">
                                    <p class="card-text"> Our Products Like | <?php echo $row ?></p>

                                </div>
                                <div>
                                    <p class="card-text">
                                        Products
                                    </p>
                                    <ul>
                                        <?php
                                        while ($name = mysqli_fetch_row($result)) {
                                        ?>
                                            <li><?php echo $name[1] ?>'s</li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./categorie.php" class="btn btn-primary">Product Data</a>
                </div>
            </div>
        </div>
    </div>


</div>