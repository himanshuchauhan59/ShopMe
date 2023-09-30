<?php
include "navbar.php";
$cat = $_GET['Categorie'];
$sql = "SELECT * FROM `data` WHERE Categorie = '$cat'";
$result = mysqli_query($obj->connection, $sql);
?>

<style>
        .card {
            border-radius: 200px;
            box-shadow: 7px 11px 25px 10px rgba(128, 128, 128, 0.815);
            transition: .5s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05, 1.05);
            border-radius: 10px;
        }   

        .card-img-top
        {
            margin-left: 60px;
            width: 18em;
            height: 15em;
        }

        .card-body {
            overflow: hidden;
            z-index: 10;
            box-shadow: 10px 10px 50px inset rgb(80, 78, 78);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
<div class="container mt-5">
    <div class="row">
        <?php
        while ($row = mysqli_fetch_row($result)) {
        ?>
            <div class="col" >
                <div class="card mx-3 my-3" style="width: 18rem;">
                        <a href="product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" style="width: 150px;" class="card-img-top"></a>
                    <div class="card-body">
                      <div class="card-title"> <?php echo $row[2] ?></div>
                  </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>
