<?php 
    include "../dbms/config.php";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $mess = $_POST['message'];
        $arr = array(                                  // array with key and values
            'Name' => $name,
            'email' => $email,
            'subject' => $subject,
            'Message' => $mess,
        );            
    
        $obj->insert_fun('inquirie' , $arr);

    }
?>