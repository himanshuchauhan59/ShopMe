<?php
include "admin_pannel.php";
?>

<!-- 
<style>
    img.img-fluid.rounded-start {
        width: 20em;
        height: 12em;
        padding: 10px 10px 10px 10px;
        border-right: 1px solid;
    }
</style> -->

<div class="container">
    <h1 class="text-light my-1 border-bottom">Stock</h1>
    <p class="text-light">
        Total Product Are Availabel 
        <?php 
            $sql1 = "SELECT * FROM `data`";
            $result = mysqli_query($obj->connection,$sql1);
            $num = mysqli_num_rows($result);
            echo $num;
        ?>
    </p>
    <table class="table table-dark table-hover">
        <tr>
            <th>
                ID
            </th>
            <th>
                Product name
            </th>
            <th>
                brand
            </th>
            <th>
                price
            </th>
            <th>
                discount
            </th>
            <th>
                Total
            </th>
            <th>
                categorie
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM `data`";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[7]?></td>
                <td><?php echo $row[8]?></td>
                <td><?php echo $row[9]?></td>
            </tr>
            
        <?php
        }
        ?>
    </table>
</div>
</div>