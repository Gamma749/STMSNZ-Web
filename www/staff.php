<!DOCTYPE html>
<html lang="en">

<head>
    <title>STMSNZ- Staff</title>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav-style.css" />
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
        $pagename = "Staff";
        include "header.php"
        ?>

        <h2>In the office</h2>
        <div class="staff-container">
            <div class="staff-profile">
                <figure><img src="images/staff/barbaraHazel.jpg"></figure>
                <h3>Barbara and Hazel</h3>
            </div>
        </div>
        <hr>

        <h2>Managing the site</h2>
        <div class="staff-container">
            <div class="staff-profile">
                <figure><img src="images/staff/Aaron.jpg"></figure>
                <h3>Aaron</h3>
            </div>
        </div>
        <hr>

        <h2>In the field</h2>
        <div class="flex-row">
            <div class="staff-container">
                <div class="staff-profile">
                    <figure><img src="images/staff/Chris.jpg"></figure>
                    <h3>Chris</h3>
                </div>
            </div>
            <div class="staff-container">
                <div class="staff-profile">
                    <figure><img src="images/staff/Dave.jpg"></figure>
                    <h3>Dave</h3>
                </div>
            </div>
            <div class="staff-container">
                <div class="staff-profile">
                    <figure><img src="images/staff/Jack2.png"></figure>
                    <h3>Jack</h3>
                </div>
            </div>
            <div class="staff-container">
                <div class="staff-profile">
                    <figure><img src="images/staff/Jordi.png"></figure>
                    <h3>Jordi</h3>
                </div>
            </div>
            <div class="staff-container">
                <div class="staff-profile">
                    <figure><img src="images/staff/Jack.jpg"></figure>
                    <h3>Jack</h3>
                </div>
            </div>
        </div>
    </main>
</body>

</html>