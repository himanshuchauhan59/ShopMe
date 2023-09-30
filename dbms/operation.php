<?php
    include "config.php";

     if (isset($_POST['submit'])) {
        $image = $_FILES["image"]["name"];
        $p_name = $_POST['p_name']; 
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $total_ammount = $_POST['tammount'];
        $p_info = $_POST['pinfo'];
        $p_des = $_POST['pdes'];
        $select = $_POST['select'];
    
        // here data are inserted ::
        $obj->insert("data" , $image , $p_name , $brand , $price ,$p_info , $p_des , $discount , $total_ammount , $select);
    }
    else if(isset($_POST['update']))
    {

        $id = $_REQUEST['id'];
        $p_name = $_POST['p_name']; 
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $total_ammount = $_POST['tammount'];
        $p_info = $_POST['pinfo'];
        $p_des = $_POST['pdes'];
        $select = $_POST['select'];

        $obj->update($id,'data',$p_name,$brand,$price,$p_info,$p_des,$discount,$total_ammount,$select);
    }

?>