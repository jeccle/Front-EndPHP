<html>
    <head>
    <?php 
    $pageTitle = 'Conflict Resolution';
    include('../php/determineID.php');
    include('../php/getValues.php');
    $question = $rows[$id]['question'];
    $description = str_replace('@', '</br>', $rows[$id]['description']);
    $content = str_replace('@', '</br>', $rows[$id]['content']);
    include('../php/head.php');
    ?>
    </head>

    <body>
    <div class="bg-img">
            <?php include('../php/navbar.php'); ?>
        <div class="banner-box"></div>
        <div class="container-fluid row backdrop-box w-100">
            <?php include('../php/sidebar.php'); ?>
            <div class="col light-text"><?php include('../php/content.php'); ?></div>
        </div>
    </body>
</html>