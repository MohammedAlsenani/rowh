<html class="desktop mbr-site-loaded" dir="rtl">

<head>
    <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/rowh-icon.png" type="image/x-icon">
    <meta name="description" content="">


    <title>روح</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <style>
        input{
            border-color: #872065;
            color: #872065;
        }
    </style>



</head>

<body style="color: #872065;" class="">
<?php 
include 'config/databaseConn.php';
?>
    <section id="top-1" style="display: none;"><a href="https://mobirise.in">Mobirise Simple Web Page Builder</a> Mobirise v5.1.4</section>

    <section class="menu cid-slMF0bBvnj" once="menu" id="menu2-7">



        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm navbar-short">
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="assets/images/rowh-logo.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>

                </div>
            </div>


            <div class="navbar-collapse collapse" id="navbarSupportedContent" style="-webkit-justify-content: flex-start; padding-right: 0px">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="https://mobiri.se" style="
    color: #872065 !important;
    font-size: x-large;
">عن روح</a>
                    </li>
                </ul>

            </div>

        </nav>
    </section>

    <section class="cid-slMCL8AclT" id="image2-3" style="
    padding-bottom: 0px;
">



        <figure class="mbr-figure container">
            <div class="image-block" style="width: 100%;">
                <img src="assets/images/rowh.png" alt="Mobirise" title="">

            </div>
        </figure>
    </section>

    <section class="services3 cid-slMDhMtfZV" id="services3-5" style="
    padding-top: 60px;
">
        <!---->

        <!---->
        <!--Overlay-->

        <!--Container-->
        <div class="container">
            <div style="border-style:solid;border-color:#872065;border-radius: 50px;margin-bottom: 35px;border-width: 2px;"></div>
            <div class="row">
                <!--Titles-->
                <div class="title pb-5 col-12">
                    <h2 class="align-right mbr-fonts-style display-1">
                        الطلعات </h2>

                </div>
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    if(isset($_GET['leader1'])){
                        $leader1 = $_GET['leader1'];
                        $sql = "UPDATE trip
                                SET leader1 = '".$leader1."'
                                WHERE id = '".$id."'";
                        $conn->query($sql);
                    }
                    if(isset($_GET['leader2'])){
                        $leader2 = $_GET['leader2'];
                        $sql = "UPDATE trip
                                SET leader2 = '".$leader2."'
                                WHERE id = '".$id."'";
                        $conn->query($sql);
                    }
                }
                $sql = "SELECT * FROM trip";
                $result = $conn->query($sql);
                while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $id = $row['id'];
                    $details = $row['details'];
                    $leader1 = $row['leader1'];
                    $leader2 = $row['leader2'];
                    echo 
                    '
                        <div class="card px-3 col-12 col-md-6">
                            <div class="card-wrapper media-container-row media-container-row">
                                <div class="card-box">
                                    <div class="top-line pb-3">
                                        <h4 class="card-title mbr-fonts-style display-5">
                                            '.$details.'
                                        </h4>
                                    </div>
                                    <div class="bottom-line">
                                        <form action="index.php">
                                            ';
                                            if(empty($leader1)){
                                                echo '<input type="text" name="leader1" />';
                                            }else{
                                                echo '<input type="text" value="'.$leader1.'" readonly />';
                                            }
                                            if(empty($leader2)){
                                                echo '<input type="text" name="leader2" />';
                                            }else{
                                                echo '<input type="text" value="'.$leader2.'" readonly />';
                                            }
                                            echo
                                            '<input type="hidden" value="'.$id.'" name="id" />
                                            <br><button type="submit" class="btn btn-light" style="
                                            height: 0px;
                                            width: 30px;
                                            padding-left: 0px;
                                            padding-right: 0px;">
                                                تم
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>

                
            </div>
        </div>
    </section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>



</body>

</html>