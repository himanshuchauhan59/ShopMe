<?php
    include "admin_pannel.php";

    $id = $_REQUEST['id'];
    $table = $_REQUEST['table']; 

    $obj->delete($id, $table);
?>

<div class="container">
<p class="text-center border-bottom border-danger h1 text-danger ">Your data are successfully Deleted</p>
</div>