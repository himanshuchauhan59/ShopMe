<?php
include "admin_pannel.php";

?>


<div class="container">
    <h1 class="text-light my-1 border-bottom">Categorie</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM `categorie` ORDER BY `id`";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <?php
                if ($_SESSION['user'] == 1 || $_SESSION['user'] == 2) {
                ?>
                    <td><a href="./update.php?id=<?php echo $row[0] ?>&edit=3&table=`categorie`"><button class="btn btn-warning mx-0">Edit</button></a></td>
                    <td><a href="./delete.php?id=<?php echo $row[0] ?>&table=categorie"><button class="btn btn-danger mx-0">Delete</button></a></td>
                    
                <?php
                }
                ?>
            </tr>

        <?php
        }
        ?>
    </table>
</div>
</div>