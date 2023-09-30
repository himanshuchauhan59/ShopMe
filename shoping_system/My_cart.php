<?php
include "../attaches/navbar.php";
?>

<style>
    #container-max {
        margin-top: 4%;
    }

    @media screen and (max-width: 500px) {

        #container-max {
            margin-top: 14%;
        }
    }

    @media screen and (max-width: 390px) {

        #container-max {
            margin-top: 18%;
        }
    }
</style>

<div class="container-fluid" id="container-max">
    <h1>My Cart</h1>
    <div>
        <div>
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM `cart` WHERE `user` = '$email'";
                $result = mysqli_query($obj->connection, $sql);
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                    echo "<h1 class='text-center'>Your Cart Is Empty :)</h1>";
                }
                while ($row = mysqli_fetch_row($result)) {
                    $select = "SELECT * FROM `data` WHERE `ID` = $row[1]";
                    $p_result = mysqli_query($obj->connection, $select);
                    $product = mysqli_fetch_row($p_result);
                    ?>
                </div>
                <div class="card mb-3 border border-secondary mx-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/image/<?php echo $product[1] ?>" class="img-fluid" style="    max-width: 10em;
    max-height: 14em;
    padding: 1vw 1vw 1vw 1vw;
    margin: 1vw 7vw;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $product[2] ?>
                                </h5>
                                <div class="row border-bottom border-secondary">
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-secondary">Brand |
                                            <?php echo $product[3] ?>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-secondary">Price |<del>
                                                <?php echo $product[4] ?>
                                            </del></p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-secondary">discount |
                                            <?php echo $product[7] ?>%
                                        </p>
                                    </div>
                                </div>
                                <div class="row border-bottom my-5 border-secondary">
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-dark">Quantity |
                                            <?php echo $row[4] ?>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-dark">Product Amount |
                                            <?php echo $product[8] ?>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text h6 text-start my-1 text-dark">Payable Amount |
                                            <?php echo $row[5] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <button onclick='location.href="../attaches/product.php?id=<?php echo $product[0] ?>"'
                                            class="btn px-5" style="width: 100%;">View</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn px-5" style="width: 100%;" id="Delete"
                                            onclick="location.href='delete_product.php?d0394852ajsdfoq3uro=3223&Product=<?php echo $row[0] ?>'">Delete</button>
                                    </div>
                                </div>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
            } else {
                ?>
            <div class="component">
                <h1 class="d-flex justify-content-center align-items-center text-secondary">You are not login</h1>
            </div>
            <?php
            }
            ?>
    </div>
</div>