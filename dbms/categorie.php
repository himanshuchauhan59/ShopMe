<?php

                
                    if (isset($_POST['insert'])) {
                        $name = $_POST['C_name'];

                        $sql = "INSERT INTO `categorie`(`Name`) VALUES ('$name')";

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
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="container-fluid">
                            <h1 class="h1 text-info border-bottom border-info mb-4">Categorie Adding</h1>
                            <label class="form-label">Enter Your Categorie Name</label>
                            <div class="row">
                                <div class="col-10">
                                    <input type="text" class="form-control border-success my-2" placeholder="enter your Categorie name" name="C_name">
                                </div>
                                <div class="col-2">
                                    <input type="submit" class="btn btn-warning w-100 my-2" name="insert">
                                </div>
                            </div>
                        </form>
                    </div>