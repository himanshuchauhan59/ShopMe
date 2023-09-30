<?php

    include "../dbms/config.php";

    if(isset($_REQUEST['brand_set']))
    {

        $val = $_REQUEST['name'];
        $id = $_REQUEST['id'];
        $obj->edit('brand', 'b_name', $val, $id);
        
        ?>
        
<script>
    if(x == undefined)
    {
        <?php 
            header("Location:brand.php");    
        ?>                    
    }
</script>
        <?php
    }
    
    
    else if(isset($_REQUEST['update']) == 1)
    {
        ?>
        <script>
            if(alert("your data are updated") == undefined)
            {
                <?php
                    header("Location:./data.php");    
                ?>
            }
            
        </script>
        <?php
    } 

    else if(isset($_REQUEST['categorie']))
    {

        $name = $_REQUEST['c_name'];
        $id = $_REQUEST['id'];  
        $obj->edit('categorie', 'Name', $name, $id);
        ?>
        <script>
            if(alert("your data are updated") == undefined)
            {
                <?php
                    header("Location:./categorie.php");    
                ?>
            }
            
        </script>
        <?php        
    }

    else if(isset($_REQUEST['user']))
    {
        $id = $_REQUEST['id'];
        $role = $_REQUEST['role'];

        $obj->edit('user', 'Role', $role, $id);
        ?>
        <script>
            if(alert("your data are updated") == undefined)
            {
                <?php
                    header("Location:./user.php");    
                ?>
            }
            
        </script>
        <?php
    }
?>





