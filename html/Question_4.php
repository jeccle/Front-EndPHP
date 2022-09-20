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
    <?php include('../php/questionPageContent.php'); ?>
    </body>
</html>