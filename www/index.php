<!DOCTYPE html>
<html lang="en">

<head>
    <title>STMSNZ- Home</title>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="STMSNZ, STMS NZ, STMS, Traffic Managment">
    <meta name="author" content="Hayden McAlister">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php include "navbar.php" ?>

    <main>
        <?php
        $pagename = "Home";
        include "header.php"
        ?>

        <div class="grid-container image-gallery">
            <div class="grid-item" style="grid-area: 1 / 1 / 3 / 6;">
                <figure><img src="images/gallery/stopgo.jpg"></figure>
            </div>
            <div class="grid-item" style="grid-area: 1 / 6 / 3 / 8;">
                <figure><img src="images/gallery/rogerRoadcone.png"></figure>
            </div>
            <div class="grid-item" style="grid-area: 3 / 3 / 4 / 8;">
                <figure>
                    <img src="images/gallery/SiteWise-Green.jpg">
                </figure>
            </div>
            <div class="grid-item" style="grid-area: 3 / 3 / 4 / 8;">
                <figure>
                    <img src="images/gallery/SiteWise-Green.jpg">
                </figure>
            </div>
        </div>
    </main>

</body>