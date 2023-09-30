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
    <h1 class="text-light my-1 border-bottom">All Data</h1>
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
                <td><a href="./update.php?id=<?php echo $row[0] ?>&edit=2&table=`data`"><button class="btn btn-warning mx-0">Edit</button></a></td>
                <td><a href="./delete.php?id=<?php echo $row[0] ?>&table=data"><button class="btn btn-danger mx-0">Delete</button></a></td>
            </tr>
            
        <?php
        }
        ?>
    </table>
</div>
</div>