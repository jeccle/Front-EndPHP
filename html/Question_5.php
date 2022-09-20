<html>
    <head>
    <?php 
    $pageTitle = 'Communication Methods and Styles';
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