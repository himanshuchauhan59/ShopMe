<?php
include "config.php";
include "../attaches/navbar.html";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .fa-eye {
            transition: 1s;
        }

        .fa-eye:hover {
            transform: rotate(180deg);
        }

        .fa-cart-arrow-down {
            transition: 1s;
        }

        .fa-cart-arrow-down:hover {
            transform: rotate(180deg);
        }

        p {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <main>
        <div class="container mt-5">
            <div class="row">
                <?php
                $select = "SELECT * FROM `data`";
                $result = mysqli_query($obj->connection, $select);
                while ($row = mysqli_fetch_row($result)) {
                ?>
                    <div class="col my-3">
                        <div class="card " style="width: 16rem; text-align: center;">
                            <a href="../attaches/product.php?id=<?php echo $row[0]?>"><img src="../assets/image/<?php echo $row[1] ?>" style="width: 150px;height: 190px;" class="card-img-top"></a>
                            <div class="card-body" style="text-align: right;">
                                <div class="card-title" style="font-weight: 800;text-align: left;"> <?php echo $row[2] ?></div>
                                <del style="font-weight: 800;">
                                    <p class="card-text"><span style="font-weight: 800;"> <?php echo $row[3] ?>/-</span></p>
                                </del>
                                <p class="card-text text-danger" style="border-botto m: 1px solid black;">- <span style="font-weight: 800;"><?php echo $row[6] ?>%</span> discount</p>
                                <p class="card-text text-success mb-3">Ammount <span style="font-weight: 800;"><?php echo $row[7] ?>/-</span>
                                </p>

                                <a href="../attaches/product.php?id=<?php echo $row[0]?>" class="btn btn-info">View <i class="fa-solid fa-eye"></i></a>
                                <a href="../attaches/product.php?id=<?php echo $row[0]?>" class="btn btn-warning">add to cart <i class="fa-solid fa-cart-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>