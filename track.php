<?php
require('db.php');


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crest Courier | Track</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="css/track.css">
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two -->
        <header class="main-header header-style-two">
            <div class="auto-container">
                <div class="header-inner">
                    <!--Header Top-->
                    <div class="header-top">
                        <div class="clearfix">

                            <!--Top Right-->
                            <div class="top-right">

                                <!-- Right List -->
                                <ul class="right-list">
                                    <li><span class="icon flaticon-mail"></span>info@crestcourier.com</li>
                                    <li><span class="icon flaticon-phone-contact"></span>+444 987-321-300</li>
                                </ul>

                            </div>

                        </div>

                    </div>

                    <!--Header-Upper-->
                    <div class="header-upper">

                        <div class="clearfix">

                            <div class="pull-left logo-box">
                                <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                            </div>

                            <div class="pull-right upper-right">

                                <!--Header Lower-->
                                <div class="header-lower">


                                    <div class="nav-outer clearfix">
                                        <!-- Main Menu -->
                                        <nav class="main-menu navbar-expand-md">
                                            <div class="navbar-header">
                                                <!-- Toggle Button -->
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>

                                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                <ul class="navigation clearfix">
                                                    <li>
                                                        <div id="google_translate_element"></div>

                                                        <script type="text/javascript">
                                                            function googleTranslateElementInit() {
                                                                new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
                                                            }
                                                        </script>

                                                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                                                        <style>
                                                            #google_translate_element {
                                                                /*color: transparent;*/
                                                            }

                                                            #google_translate_element a {
                                                                display: none;
                                                            }

                                                            div.goog-te-gadget {
                                                                /*color: transparent !important;*/
                                                            }
                                                        </style>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li class="current"><a href="track.php">Track & Trace</a></li>
                                                </ul>
                                            </div>
                                        </nav>

                                        <!-- Main Menu End-->
                                        <div class="outer-box clearfix">

                                            <!--Option Box-->
                                            <div class="option-box">

                                                <!--Search Box-->
                                                <div class="search-box-outer">
                                                    <div class="dropdown">
                                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-route"></span></button>
                                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                            <li class="panel-outer">
                                                                <div class="form-container">
                                                                    <form method="post" action="track.php">
                                                                        <div class="form-group">
                                                                            <input type="search" name="tracking_number" placeholder="Track Your Shipment" required>
                                                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--End Header Lower-->

                            </div>

                        </div>

                    </div>
                    <!--End Header Upper-->
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/logo-small-2.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="current"><a href="track.php">Track & Trace</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/12.jpg);">
            <div class="auto-container">
                <h2>Track & Trace</h2>
                <div class="separater"></div>
            </div>
        </section>

        <!--Breadcrumb-->
        <div class="breadcrumb-outer">
            <div class="auto-container">
                <ul class="bread-crumb text-center">
                    <li><a href="index.html">Home</a> <span>/</span></li>
                    <li>Track & Trace</li>
                </ul>
            </div>
        </div>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-12 col-md-12 col-sm-12">
                        <div class="track-section">
                            <!-- Sec Title Two -->
                            <div class="sec-title-two sec-title">
                                <h2>Track & <span>Trace Shipment</span></h2>
                                <div class="separater"></div>
                            </div>
                            <div class="track-form-two">
                                <form method="post" action="track.php">
                                    <div class="form-group">
                                        <label>Enter Tracking Number Here</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tracking_number" placeholder="Enter your tracking number e.g CRG-11-XXXX">
                                        <button type="submit" name="trackingsub" class="theme-btn submit-btn">Track Your Shipment</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Tracking Info -->
                            <div class="tracking-info-detail">
                                <?php
                                if(isset($_POST['tracking_number'])) {
                                   <div class="tracking-info-detail">
    <?php
    if(isset($_POST['tracking_number'])) {
        // Establish connection to your database
        $servername = "ft8.h.filess.io";
        $username = "FreightCourier_beneathmap"; // Your MySQL username
        $password = "140d470c11a886db03456d477a299c18e6fc19fc"; // Your MySQL password
        $dbname = "FreightCourier_beneathmap"; // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL query to fetch tracking information
        $tracking_number = $_POST['tracking_number'];
        $sql = "SELECT * FROM shipment_tracking WHERE tracking_number = '$tracking_number'";
        $result = $conn->query($sql);

        // Check if tracking information exists
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Display fetched tracking information
                echo "<div class='tracking-box'>";
                echo "<div class='tracking-time-box'>";
                echo "<div class='tracking-time'>" . $row['tracking_time'] . "</div>";
                echo "<span>" . $row['delivery_time'] . "</span>";
                echo "</div>";
                echo "<div class='tracking-location style-two'>";
                echo "<span class='dott'></span>";
                echo "<strong>Active in " . $row['destination'] . "</strong>";
                echo "</div>";
                echo "</div>";

                // Display other shipment details
                echo "<div class='container' style='display: block'>";
                // Shipper Information
                echo "<div class='grid'>";
                echo "<article>";
                echo "<h5>Shipper Information</h5>";
                echo "<hr>";
                echo "<ul style='font-size: 13px;'>";
                echo "<li>Name: " . $row['shipper_name'] . "</li>";
                echo "<li>Address: " . $row['shipper_address'] . "</li>";
                echo "<li>Phone Number: " . $row['shipper_phone'] . "</li>";
                echo "<li>Email: " . $row['shipper_email'] . "</li>";
                echo "</ul>";
                echo "</article>";

                // Receiver Information
                echo "<article>";
                echo "<h5>Receiver Information</h5>";
                echo "<hr>";
                echo "<ul style='font-size: 13px;'>";
                echo "<li>Name: " . $row['receiver_name'] . "</li>";
                echo "<li>Address: " . $row['receiver_address'] . "</li>";
                echo "<li>Phone Number: " . $row['receiver_phone'] . "</li>";
                echo "<li>Email: " . $row['receiver_email'] . "</li>";
                echo "</ul>";
                echo "</article>";
                echo "</div>";

                // Shipment Information
                echo "<div style='background: grey; color: white; padding: 10px; font-size: 13px; text-align: center; border-radius: 3px'>SHIPMENT STATUS - " . $row['status'] . "</div>";
                echo "<h6 style='padding: 10px 0; margin: 0 20px'>Shipment Information</h6>";
                // Display other shipment details as per your requirement
                // You can fetch and display other fields similarly
                echo "</div>";
            }
        } else {
            // If no tracking information found
            echo "<div class='dialog'>Invalid tracking number</div>";
        }

        // Close database connection
        $conn->close();
    }
    ?>
</div>
                                }
                                ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
<?php } ?>
</body>

</html>
