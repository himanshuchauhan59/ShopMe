<?php
include "main.php";

class config extends configration
{
    use connection;
    private $ser_name = "localhost";
    private $user_name = "root";
    private $pass = "";
    private $db_name = "jp_mart";

    public $sql;

    public function insert($table, $image, $p_name, $brand, $price, $p_info, $p_des, $discount, $total_ammount, $select)
    {
        // file uploading ::
        $image_temp = $_FILES["image"]["tmp_name"];
        $folder = "../assets/image/" . $image;
        //insert the data in the database ::


        $sql2 = "INSERT INTO 
        `$table` (`IMAGES`, `PRODUCT_NAME`, `BRAND` ,`PRICE`, `PRODUCT_INFO`, `DESCRIPTION` , `DISCOUNT` , `tammount` , `Categorie`)
         VALUES ('$image', '$p_name', '$brand' ,'$price', '$p_info', '$p_des', '$discount', '$total_ammount', '$select')";

        $this->sql = mysqli_query($this->connection, $sql2);

        if ($this->sql && move_uploaded_file($image_temp, $folder)) {
            header("Location:http://localhost/jp%20tech/dbms/treate.php?choice=1");
        }
        else
        {
            echo mysqli_error($this->connection);
        }
    }

    public function update($id, $table, $p_name, $brand, $price, $p_info, $p_des, $discount, $total_ammount, $select)
    {
        $update = "UPDATE `$table` SET `PRODUCT_NAME` = '$p_name', `BRAND` = '$brand', `PRICE` = $price, `PRODUCT_INFO` = '$p_info', `DESCRIPTION` = '$p_des',`DISCOUNT` = $discount, `tammount` = $total_ammount, `Categorie` = '$select' WHERE `data`.`ID` = $id";
        $this->sql = mysqli_query($this->connection, $update);
        if($this->sql)
        {
            header("Location:../admin/set.php?update=1");
        }
        else
        {
            echo mysqli_error($this->connection); 
        }
    }

    public function delete($id, $table)
    {
        $delete = "DELETE FROM $table WHERE `$table`.`id` = $id";
        $this->sql = mysqli_query($this->connection, $delete);
        if ($this->sql) {
            ?>
                <script>
                    var x = alert("your data are deleted");
                </script>
            <?php
        }
    }

    public function select($id, $table)
    {
        $select = "SELECT * FROM `$table` WHERE  `$table`.`id` = $id";
        $this->sql = mysqli_query($this->connection, $select);
        $row = mysqli_fetch_row($this->sql);
        echo "
        <style>
        #cards .card {
            border-radius: 10px;
            box-shadow: 7px 11px 25px 10px rgba(128, 128, 128, 0.815);
            transition: .5s ease;
            height: 340px;
            overflow: hidden;
        }

        #cards .card:hover {
            transform: scale(1.05, 1.05);
            border-radius: 10px;
        }   

        .card-img-top
        {
            width: 14em;
            margin-left: 28px;
            height: 15em;
        }

        #cards .card-body {
            overflow: hidden;
            z-index: 10;
            box-shadow: 10px 10px 50px inset rgb(80, 78, 78);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
          <div class='col' id='cards' data-aos='fade-out'>
            <div class='card mx-3 my-3' style='width: 18rem;'>
            <a href='../attaches/product.php?id=$row[0]'><img src='../assets/image/$row[1]' class='card-img-top'></a>
                <div class='card-body'>
                    <p class='card-text'>
                        $row[2]
                    </p>
                </div>
            </div>
        </div>";
    }

    public function split_fun($table, $val)
    {

        $ins_sql = "INSERT INTO " . $table . " (`" . implode("`,`", array_keys($val)) . "`) VALUES ('" .  implode("','", array_values($val)) . "')";

        $this->sql = mysqli_query($this->connection, $ins_sql);

        if (!$this->sql) {
            echo "inserted " . mysqli_errno($this->connection);
        }
        else
        {
            header("Location:../login sys/system.php?sys=16509104700002");
        }
    }

    public function Insert_fun($table, $val)
    {

        $insert_sql = "INSERT INTO " . $table . " (`" . implode("`,`", array_keys($val)) . "`) VALUES ('" .  implode("','", array_values($val)) . "')";

        $this->sql = mysqli_query($this->connection, $insert_sql);

        if (!$this->sql) {
            echo "inserted " . mysqli_errno($this->connection);
        }
        else
        {
            header("Location:../menu/contactus.php?type=ok");
        }
    }
    public function checking($table, $arr)
    {   
        session_start();
        $select = "SELECT * FROM " . $table . " WHERE email = '" . $arr['email'] . "' AND pass = '" . $arr['pass'] . "'";
        $this->sql = mysqli_query($this->connection, $select);
        $row = mysqli_fetch_row($this->sql);
        if ($row == NULL) {
            $_SESSION['error'] = 1;
            header("Location:../login sys/system.php?sys=16509104700002");
        } else
        {
            $_SESSION['user'] = $row[1];
            $_SESSION['email'] = $row[4];
            header("Location:../index/mainsection.php");
        }
    }
    public function edit($table , $col , $value , $id)
    {
        $update_sql = "UPDATE `$table` SET `$col` = '$value' WHERE `$table`.`id` = $id;";
        $this->sql = mysqli_query($this->connection , $update_sql);

        if($this->sql)
        {
            ?>
                <script>
                    var x = alert("update successfull");
                </script>
            <?php
        }
    }

}

$obj = new config();
$obj->connect();
?>