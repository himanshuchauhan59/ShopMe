<?php
include "../dbms/config.php";
if (isset($_REQUEST['d0394852ajsdfoq3uro']) == 3223) {
    $id = $_REQUEST['Product'];
    $delete = "DELETE FROM `cart` WHERE `cart`.`id` = $id";
    $sql = mysqli_query($obj->connection, $delete);
    if ($sql) {
?>
        <script>
            var x = alert();
            if( x == undefined){
                <?php
                    header("Location:My_cart.php");    
                ?>
            }
        </script>
<?php
    
    }
}
?>