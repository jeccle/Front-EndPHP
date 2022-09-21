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
        
        <div class='container-fluid backdrop-box'>
            <div class='carousel-box'>
            <h1 class='title-box nav-title-text card-carousel-title'>Questions 1 - 9</h1>
            <?php include('php/cardCarousel.php') ?>
            <?php include_once('php/footer.php')?>
            </div>
        </div>

        </div>
    </body>
</html>