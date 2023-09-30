<?php
include "admin_pannel.php";

?>


<div class="container">
    <h1 class="text-light my-1 border-bottom">Member</h1>
    <table class="table table-dark table-hover text-center">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Country Code
            </th>
            <th>
                Mobile Number
            </th>
            <th>
                email
            </th>
            <th>
                address
            </th>
            <th>
                Role
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM `user` WHERE `user`.`Role` = 'Admin'";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[6] ?></td>
                <td><?php echo $row[7] ?></td>
                <?php
                if ($_SESSION['user'] == 1 || $_SESSION['user'] == 2) {
                ?>
                    <td><a href="./update.php?id=<?php echo $row[0] ?>&edit=4&table=`user`"><button class="btn btn-warning mx-0">Edit</button></a></td>
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