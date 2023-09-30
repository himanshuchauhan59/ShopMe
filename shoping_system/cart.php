<?php
include "../attaches/navbar.php";
if (isset($_REQUEST['product'])) {
    $product = $_REQUEST['product'];
    $select = "SELECT * FROM `data` WHERE `data`.`id` = $product";
    $result = mysqli_query($obj->connection, $select);
    $row = mysqli_fetch_row($result);
    $qt = $_REQUEST['Qt'];
    $Qtt = $qt;
    $P_price =  $row[8];
    $Amount = $Qtt * $P_price;
}
?>

<style>
    .component {
        margin-top: 20%;
        height: 20vh;
    }
</style>
<div class="container">
    <div class="container">
        <?php
        if (isset($product)) {
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $sql = "INSERT INTO `cart` (`number`, `name`, `user` , `Qt` , `Total`) VALUES ('$row[0]', '$row[2]', '$email' , '$qt' , '$Amount');";
                $result = mysqli_query($obj->connection, $sql);
                if (isset($result)) {
        ?>
                    <div class="component d-flex flex-column justify-content-center align-items-center">
                        <h1 class="text-secondary">You Item Are Added To cart</h1>
                        <button onclick="location.href='My_cart.php'" class="btn text-center btn-info">Go Cart</button>
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
        }
        ?>
    </div>
</div>