<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * body {
            margin: 0px;
            box-sizing: border-box;
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }

        #loader {
            background: #000 url(1508342007_JP.gif) no-repeat center center;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }

        .img-thumbnail {
            position: fixed;
            width: 370px;
            height: 500px;
        }

        .per {
            margin: 10px;
            font-size: 25px;
            color: red;
        }

        .ret {
            font-size: 30px;
            color: rgb(77, 153, 47);
        }

        .price {
            font-size: 14px;
            display: block;
            color: rgb(57, 61, 64);
        }

        .m-text {
            margin: 10px;
            font-size: 20px;

        }

        .btn {
            background-color: rgb(245, 173, 4) !important;
            width: 192px;
            border-radius: 20px;
            margin-top: 5px;
        }

        .btn2 {
            background-color: #f56804 !important;
            width: 192px;
            border-radius: 20px;
            margin-top: 5px;
        }

        .img {
            border-radius: 50px;
            cursor: pointer;
        }

        .information {
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }

        .font-weight-normal {
            font: 23px;
            font-weight: 600;
            line-height: revert;
        }

        @media (max-width: 940px) {
            .img-thumbnail {
                width: 300px;
            }


        }

        @media (max-width: 770px) {
            .img-thumbnail {
                width: 250px;
            }


        }

        @media (max-width: 630px) {
            .img-thumbnail {
                width: 170px;
            }
        }

        @media (max-width: 451px) {
            .img-thumbnail {
                width: 70px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid row">
        <div class="col-5 image-con">
            <img src="product.jpg" class="img-thumbnail img-fluid">

        </div>


        <div class="col-6">
            <b>
                <div class="text-justify m-text">
                    iQOO vivo Z6 44W (Lumina Blue, 6GB RAM, 128GB Storage) | 44W FlashCharge + 5000mAh Battery | FHD+
                    AMOLED
                    Display | in-Display Fingerprint
                </div>
            </b>
            <hr>
            <div class="container">
                <span class="per">-24%</span>
                <span class="ret">₹15000</span>
                <span class="price">M.R.P&nbsp&nbsp:&nbsp&nbsp<strike>₹24000</strike></span>
                <div> Inclusive of all taxes</div>
            </div>
            <hr>
            <div>
                <pre class="information">
                        <b style="font-family: arial, Geneva, Tahoma, sans-serif">Cellular 	        LTE
                                Technology
                                    
                                Model Name	 IQOO Z6 44W
                
                                Screen Size	 6.44 Inches
                
                                Connectivity     USB Type-C, Wi-Fi 6, Bluetooth 5
                                technologies
                
                                Network Service  Unlocked for All Carriers
                                Provider</b>
                             </pre>
                <!-- <b>Cellular Technology</b><span>LTE</span> -->
            </div>
            <hr>
            <div class="container row text-center">

                <div class="col-md-3 mdqr"><img src="pay_d.png" alt="" class="img img-responsive"><br> Pay on delivery
                </div>
                <div class="col-md-3 mdqr"><img src="seven_d_replace.png" alt="" class="img img-responsive"><br> 7 Days
                    Replacemen</div>
                <div class="col-md-3 mdqr"><img src="delivered.png" alt="" class="img img-responsive"><br>ShopMe 
                    Delivered</div>
                <div class="col-md-3 mdqr"><img src="worranty.png" alt="" class="img img-responsive"><br>1 Year Warranty
                </div>

            </div>
            <hr>
            <div class="container row">
                <img src="24hour.png" style="width: 15% !important;" class="col-4">
                <div class="col-8">Free product support will be provided within 24 hours in the unlikely event of a
                    technical defect
                    under replacement period.</div>
            </div>
            <hr>
            <div class="text-justify m-text">
                <h5><span style="border-bottom-style: double;">About this item</span></h5>

                <ul>
                    <li class="font-weight-normal">44W FlashCharge</li>
                    <li class="font-weight-normal">Snapdragon 680 comes with octa-core architecture design that adopts
                        the new 6nm process, CPU
                        increased by 25% & GPU performance increased by 10% compared with Qualcomm Snapdragon 662.</li>
                    <li class="font-weight-normal">Z6 is equipped with a FHD+ AMOLED dispaly to give a truly immersive
                        display experience with true
                        color contrast. The display provides a 180Hz Touch Sampling Rate in the gaming sessions for an
                        enhanced touch response.</li>
                    <li class="font-weight-normal">50MP AI rear camera comes with a variety of smart AI camera features
                        and effects to capture
                        wonderful moments with ease.</li>
                </ul>
            </div>



            <hr>
            <div class="container row">
                <div class="col-md-5">
                <button type="button" class="btn">Add to cort</button>
                <button type="button" class="btn btn2">Buy Now</button>
                </div>
                
                <div class="col-md-1  text-center" style="font-size: 25px; ">Qty:</div>
                <div class="col-md-4">
                 <input type="number" class="form-control"
                    style="width: 192px; border-radius: 20px;background-color: #f56804 ;margin-top: 5px;" value="1">
                </div>
            </div>
            <hr>
            
        </div>
    </div>






</body>

</html>