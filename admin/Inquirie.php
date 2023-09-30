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
    <h1 class="text-light my-1 border-bottom">Inquirie</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Subject
            </th>
            <th>
                Message
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM `inquirie`";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><a href="./delete.php?id=<?php echo $row[0] ?>&table=inquirie"><button class="btn btn-danger mx-0">Delete</button></a></td>
            </tr>
            
        <?php
        }
        ?>
    </table>
</div>
</div>