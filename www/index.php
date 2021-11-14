<!DOCTYPE html>
<html lang="en">

<head>
    <title>STMSNZ- Home</title>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav-style.css" />
    <link rel="stylesheet" href="slideshow.css" />
    <link rel="stylesheet" href="image-grid.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="STMSNZ, Traffic Management, Traffic Management Dunedin, STMS NZ, STMS">
    <meta name="author" content="Hayden McAlister">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="slideshow.js" defer></script>

</head>

<body>
    <?php include "navbar.php" ?>

    <main>
        <?php
        $pagename = "Home";
        include "header.php"
        ?>

        <div id="landing">
            <!-- <img src="images/gallery/Levels-of-Temporary-Traffic-Management-TTM.jpg"> -->
            <h1>Welcome to</h1>
            <img src="images/logo_large.png">
        </div>
        <div class="flex-row">
            <div>
                <p>Here at STMSNZ, we value safety and security above all else. That's why we offer the best traffic management around. From plans and consulting to equipment and execution, STMSNZ is your one-stop-shop for all traffic management needs!</p>
            </div>
            <div>
                <p>The four aims of the company are:</p>
                <ul>
                    <li>Safety - Lead by example</li>
                    <li>Reliability – Deliver on Promise</li>
                    <li>K.I.S.S. Theory – Do the Basics Brilliantly</li>
                    <li>Client is Number 1 – We Go Beyond the Call </li>
                </ul>
            </div>
        </div>
    </main>

</body>