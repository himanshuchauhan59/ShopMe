<?php
include "navbar.php";
$id = $_GET['id'];
$select = "SELECT * FROM `data` WHERE `data`.`id` = $id";
$result = mysqli_query($obj->connection, $select);
$row = mysqli_fetch_row($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .main{
            position: relative;
            top: 100px;
        }
    </style>
</head>

<body>

    <div class="main my-3">
        <div class="container">
            <div class="row border-bottom border-secondary">
                <div class="col-md-3">
                    <div class="image">
                        <img src="../assets/image/<?php echo $row[1] ?>" class="img-thumnail" style="width: 200px; height: 250px; padding: 10px;">
                        <!--image-->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="contain border-bottom border-secondary">
                        <h3><?php echo $row[2] ?></h3>
                        <!--Name-->
                        <div class="d-flex flex-row justify-content-around">
                            <div>
                                <p class="text-start text-secondary">Brand:- <?php echo $row[3] ?></p>
                                <!--Brand Name-->
                            </div>
                            <div>
                                <p class="text-start text-secondary">Categorie:- <?php echo $row[9] ?></p>
                                <!--Categorie-->
                            </div>
                        </div>
                    </div>
                    <div class="contain2 mt-2">
                        <h3>Product Price Detail</h3>
                        <div class="my-2 d-flex flex-row justify-content-around border-bottom border-secondary">
                            <div>
                                <p class="text-start text-secondary">Price :</p>
                            </div>
                            <div>
                                <del>
                                    <p class="text-start text-dark">₹<?php echo $row[4] ?></p>
                                    <!--Price-->
                                </del>
                            </div>
                        </div>
                        <div class="my-2 d-flex flex-row justify-content-around border-bottom border-secondary">
                            <div>
                                <p class="text-start text-secondary">Discount :</p>
                            </div>
                            <div>
                                <p class="text-start text-danger"><?php echo $row[7] ?>%</p>
                                <!--Discount-->
                            </div>
                        </div>
                        <div class="my-2 d-flex flex-row justify-content-around">
                            <div>
                                <p class="text-start text-secondary">Total Price :</p>
                            </div>
                            <div>
                                <p class="text-start text-success">₹<?php echo $row[8] ?></p>
                                <!--Total Price-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-bottom border-secondary">
                <div class="col-md-3">
                    <h3>Description</h3>
                    <!--Information-->
                    <ul>
                        <li>
                            <?php
                            echo $row[5]
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>About</h3>
                    <!--Descrtiption-->
                    <ul>
                        <li>
                            <?php
                            echo $row[5]
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column">
                        <!--purchase Section-->
                        <h3>Purchase</h3>
                        <?php
                            if (isset($_SESSION['user'])) {
                            
                                ?>
                                <form action="../shoping_system/cart.php?product=<?php echo $row[0] ?>" method="post">
                                <div class="d-flex justify-content-between">
                                    <p class="text-start text-secondary my-1 mx-3">Qty</p><input type="number" class="form-control border border-dark" placeholder="Enter Your Quantity" name="Qt" max="100" min="1" value="1"> 
                                </div>
                                <input type="submit" class="btn btn-warning my-3" value="Add To cart">
                                </form>
                            <?php
                            }
                            ?>
                            <a href="../index/mainsection.php"><button class="btn btn-dark my-3">Back</button></a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-around align-items-center my-4 ">
                <h3>Facilities</h3>
                <!--facilities-->
                <div class="col-md-3">
                    <div class=" text-center">
                        <img src="../assets/icon-returns._CB484059092_.png" alt="">
                    </div>
                    <div class=" my-0 text-center text-dark">
                        7 Day's Return
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" text-center">
                        <img src="../assets/icon-warranty._CB485935626_ (1).png" alt="">
                    </div>
                    <div class=" my-0 text-center text-dark">
                        Warenty
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" text-center">
                        <img src="../assets/icon-warranty._CB485935626_.png" alt="">
                    </div>
                    <div class=" my-0 text-center text-dark">
                        Secured Your Product
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" text-center">
                        <img src="../assets/No_contact_delivery_final._CB432269791_.png" alt="">
                    </div>
                    <div class=" my-0 text-center text-dark">
                        No Contact Delivery
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdn.jsdelivr.net/i]npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>