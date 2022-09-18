<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Home</title>
	<link rel="icon" type="images/x-icon" href="images/pngegg.png">
	<meta charset="utf-8" />

	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
    </head>
    <?php
    $cardCount = 0;
    ?>
    <body>
        <div class="bg-img">
            <?php
            include_once('php/navbar.php');
            ?>
        <div class="banner-box"></div>
        <div class="container-fluid backdrop-box card-box">
            <?php
            include_once('php/cardBoxes.php')
            ?>
        </div>

        </div>
    </body>
</html>