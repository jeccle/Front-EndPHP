<!DOCTYPE html>
<html>
    <head>
    <?php 
    $pageTitle = 'Question Index';
    include('php/head.php');
    
    ?>
    </head>
    <?php $cardCount = 0;?>
    <body>
        <div class="bg-img">
            <?php include('php/navbar.php'); ?>
        <div class="banner-box"></div>
        <div class="container-fluid backdrop-box card-box">
            <?php include('php/cardBoxes.php') ?>
        </div>
        </div>
    </body>
</html>