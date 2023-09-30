<?php
include "admin_pannel.php";

?>


<style>
    img.img-fluid.rounded-start {
        width: 20em;
        height: 12em;
        padding: 10px 10px 10px 10px;
        border-right: 1px solid;
    }
</style>

<div class="container">
    <h1 class="text-light my-1 border-bottom">brands</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM `brand`";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) { ?>
            <div class="col-6">
                <div class="card w-100 my-3 p-3 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="../assets/brand/<?php echo $row[1] ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Brand Name :- <?php echo $row[2] ?></h5>

                                <?php
                                if ($_SESSION['user'] == 1 || $_SESSION['user'] == 2) {
                                ?>
                                    <a href="./update.php?id=<?php echo $row[0] ?>&edit=1&table=`brand`"><button class="btn btn-warning mx-0">Edit</button></a>
                                    <a href="./delete.php?id=<?php echo $row[0] ?>&table=brand"><button class="btn btn-danger">delete</button></a>
                                    
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>