<!DOCTYPE html>
<html lang="en">

<head>
    <title>STMSNZ- Services</title>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav-style.css" />
    <link rel="stylesheet" href="services-grid.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="STMSNZ, Traffic Management, Traffic Management Dunedin, STMS NZ, STMS">

    <meta name="author" content="Hayden McAlister">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php include "navbar.php" ?>

    <main>
        <?php
        $pagename = "Services";
        include "header.php"
        ?>


        <h2>Sales and Hire</h2>
        <div id="services-grid">
            <div class="grid-item">
                <img src="images/services/traffic-cone.jpg">
                <h3>Cones</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/road-sign.jpg">
                <h3>Road Signs</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/vms.jpg">
                <h3>Portable VMS</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/fencing.jpg">
                <h3>Fencing</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/bollards.jpg">
                <h3>Bollards</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/judder-bar.jpg">
                <h3>Judder Bars</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/traffic-light.jpg">
                <h3>Traffic Lights</h3>
            </div>
            <a href="contact.php">
                <div class="grid-item enquire">
                    <img src="images/arrow.png">
                    <h3>Enquire Today</h3>
                </div>
            </a>
        </div>
        <hr>
        <h2>Traffic Management</h2>
        <div id="services-grid">
            <div class="grid-item">
                <img src="images/services/traffic-management.jpg">
                <h3>Traffic Management</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/advice.jpg">
                <h3>Advice</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/plan-design.jpg">
                <h3>Plan Design</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/site-set-up.jpg">
                <h3>Site Set Up</h3>
            </div>
            <div class="grid-item">
                <img src="images/services/site-management.jpg">
                <h3>Site Management</h3>
            </div>
            <a href="contact.php">
                <div class="grid-item enquire">
                    <img src="images/arrow.png">
                    <h3>Enquire Today</h3>
                </div>
            </a>
        </div>
    </main>
</body>

</html>