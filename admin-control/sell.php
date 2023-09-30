<?php
include "admin_pannel.php";

?>
<div class="container">
    <h1 class="text-light my-1 border-bottom">selling product</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>
                ID
            </th>
            <th>
                prduct ID
            </th>
            <th>
                Product name
            </th>
            <th>
                brand
            </th>
            <th>
                product price
            </th>
            <th>
                Payable Amount
            </th>
            <th>
                categorie
            </th>
            <th>
                user
            </th>
            <th>
                Qt
            </th>
            <th>
                Total
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM `cart`";
        $result = mysqli_query($obj->connection, $sql);

        while ($row = mysqli_fetch_row($result)) {
            $select = "SELECT * FROM `data` WHERE `ID` = $row[1]";
            $run = mysqli_query($obj->connection, $select);
            $data = mysqli_fetch_row($run);
            $user = "SELECT * FROM `user` WHERE `email` = '$row[3]'";
            $user_run = mysqli_query($obj->connection, $user);
            $user_info = mysqli_fetch_row($user_run);
        ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><a href="./update.php?id=<?php echo $data[0] ?>&edit=6&table=`data`"><?php echo $data[0] ?></a></td>
                <td><?php echo $data[2] ?></td>
                <td><?php echo $data[3] ?></td>
                <td><?php echo $data[4] ?></td>
                <td><?php echo $data[8] ?></td>
                <td><?php echo $data[9] ?></td>
                <td><a href="./update.php?id=<?php echo $user_info[0] ?>&edit=5&table=`user`"><?php echo $row[3] ?></a></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[5] ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>
</div>