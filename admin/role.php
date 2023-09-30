<?php
include "admin_pannel.php";
?>

<?php
if ($_SESSION['user'] == 1) {
?>
    <?php
    if (isset($_POST['insert'])) {
        $name = $_POST['role'];

        $sql = "INSERT INTO `role`(`Roles`) VALUES ('$name')";

        $result = mysqli_query($obj->connection, $sql);

        if ($result) {
    ?>
            <script>
                alert("data are successfully inserted <?php echo $name ?>");
            </script>
    <?php
        }
    }
    ?>
    <div class="container my-5 ">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <h1 class="h1 text-info border-bottom border-info mb-4">Role Adding</h1>
                <label class="form-label text-light">Enter Role Name</label>
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control border-light my-2 bg-dark text-light" placeholder="enter Role" name="role">
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn btn-warning w-100 my-2" name="insert">
                    </div>
                </div>
        </form>
    </div>
<?php
}
?>