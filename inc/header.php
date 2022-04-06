<?php
//include("inc/common.php");
include('languages/lang_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rito varer registrering">
    <meta name="author" content=" Sang">
    <link rel="icon" href="images/favicon.png">
    <title> <?php echo $lang['rito'] ?> </title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start Navabar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-warning fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fa fa-leaf"></i> <?php echo $lang['rito'] ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> <?php echo $lang['products'] ?><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Hero Image -->
    <div class="hero-image">
        <div class="hero-text">
            <h1> <?php echo $lang['rito Registration'] ?> </h1>
            <p> <strong><?php echo $lang['GARN & HOBBY'] ?></strong></p>
            <a class="btn btn-outline-light btn-lg text-warning" href="index.php" role="button"><i class="fas fa-box-open"></i> <?php echo $lang['rito'] ?></a>
        </div>
    </div>
    <!-- End Hero Image -->