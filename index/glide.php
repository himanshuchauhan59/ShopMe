<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./glide.core.min.css">
    <link rel="stylesheet" href="./glide.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .image {
            width: 80%;
            height: 14vw;
            padding: 0px 14px;
        }

        .glide__slide--active {
            transform: scale(1.1, 1.1);
            transition: .3s;
        }

        .glide__track {
            margin: 20px 0px 0px 11px;
            padding: 10px 0px;
        }

        li.glide__slide {
            margin: 20px 26px;
        }

        .fa-solid {
            color: black;
        }
    </style>
</head>

<body>
    <DIV class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` WHERE Categorie = 'Mobile' AND 'PRICE' < 70000";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <i class="fa-solid fa-caret-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-caret-right"></i></button>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="glide" id="glide">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` ORDER BY 'ID' LIMIT 2 , 6";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="groups">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" id="btn2" data-glide-dir="<">
                                <i class="fa-solid fa-caret-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" id="btn2" data-glide-dir=">">
                                <i class="fa-solid fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="glide" id="glide0">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` ORDER BY 'ID' LIMIT 1 , 3";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="groups">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" id="btn2" data-glide-dir="<">
                                <i class="fa-solid fa-caret-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" id="btn2" data-glide-dir=">">
                                <i class="fa-solid fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="glide" id="glide1">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` ORDER BY 'ID' LIMIT 2 , 4";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="groups">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" id="btn2" data-glide-dir="<">
                                <i class="fa-solid fa-caret-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" id="btn2" data-glide-dir=">">
                                <i class="fa-solid fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="glide" id="glide2">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` ORDER BY 'ID' LIMIT 3 , 5";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="groups">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" id="btn2" data-glide-dir="<">
                                <i class="fa-solid fa-caret-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" id="btn2" data-glide-dir=">">
                                <i class="fa-solid fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="glide" id="glide3">
                    <div class="glide__track" data-glide-el="track" data-aos="zoom-in">
                        <ul class="glide__slides">
                            <?php
                            $sql = "SELECT * FROM `data` ORDER BY 'ID' LIMIT 4 , 6";
                            $result = mysqli_query($obj->connection, $sql);

                            while ($row = mysqli_fetch_row($result)) {
                            ?>
                                <li class="glide__slide">
                                    <a href="../attaches/product.php?id=<?php echo $row[0] ?>"><img src="../assets/image/<?php echo $row[1] ?>" class="image"></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="groups">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" id="btn2" data-glide-dir="<">
                                <i class="fa-solid fa-caret-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" id="btn2" data-glide-dir=">">
                                <i class="fa-solid fa-caret-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DIV>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdn.jsdelivr.net/i]npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        const config = {
            type: 'carousel',
            perView: 5,
            focusAt: 'center',
        };

        const config1 = {
            type: 'carousel',
            perView: 1,
        };

        new Glide('.glide', config).mount()
        new Glide('#glide', config).mount()
        new Glide('#glide1', config1).mount()
        new Glide('#glide0', config1).mount()
        new Glide('#glide2', config1).mount()
        new Glide('#glide3', config1).mount()
    </script>

</body>

</html>