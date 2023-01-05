
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="phpmotors">
    <meta name="theme-color" content="blue">
    <meta name="name" content="PHPMotors">
    <meta name="application-name" content="PHPMotors">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" sizes="72x180" href="images/site/logo.png">

    <link rel="stylesheet" media="screen" href="css/normalize.css">
    <link rel="stylesheet" media="screen" href="css/base.css">
    <link rel="stylesheet" media="screen and (min-width:600px)" href="css/medium.css">
    <link rel="stylesheet" media="screen and (min-width:800px)" href="css/large.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 
    <?php
    $titles = array(
        "home.php" => "Home",
        "used.php" => "Used Cars",
        "suv.php" => "Sport Utility Vehicles",
        "sports.php" => "Sports Cars",
        "trucks.php" => "Trucks",
        "classic.php" => "Classic Cars"
    );
    $current_page = basename($_SERVER['PHP_SELF']);
    echo "<title>PHP Motors - " . $titles[$current_page] . "</title>";
    ?>

</head>
