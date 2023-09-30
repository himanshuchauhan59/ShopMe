<?php
    include "../dbms/config.php";

    if($_REQUEST['reg'] == 1389437)
    {
    $U_name = $_POST['name'];
    $C_code = $_POST['c_code'];
    $Mobile_num = $_POST['m_num'];
    $email = $_POST['email'];
    $pass =md5($_POST['pass']);
    $add = $_POST['add'];
    $arr = array(                                  // array with key and values
        'U_name' => $U_name,
        'C_code' => $C_code,
        'Mobile_num' => $Mobile_num,
        'email' => $email,
        'pass' => $pass,
        'address' => $add
    );            

    $obj->split_fun('user' , $arr);
    }
    
    else if($_REQUEST['reg'] == 1354437)
    {
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        $check = array(
            "email" => "$email",
            "pass" => "$pass"
        );

        $obj->checking('user' , $check);
        session_start();
        
    }
?>