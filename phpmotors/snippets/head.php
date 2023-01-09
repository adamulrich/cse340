<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="phpmotors">
    <meta name="theme-color" content="blue">
    <meta name="name" content="PHPMotors">
    <meta name="application-name" content="PHPMotors">

    <link rel="shortcut icon" href="images/site/logo.png">
    <link rel="icon" sizes="72x180" href="images/site/logo.png">

    <link rel="stylesheet" media="screen" href="css/normalize.css">
    <link rel="stylesheet" media="screen" href="css/base.css">
    <link rel="stylesheet" media="screen" href="css/medium.css">
    <link rel="stylesheet" media="screen" href="css/large.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php
    $query_string = filter_input(INPUT_GET, "action", FILTER_DEFAULT);
    if ($query_string == '') {
        $current_page = 'home';
    } else {
        $current_page = $query_string;
    }

    $titles = array(
        "home" => "Home",
        "used" => "Used Cars",
        "suv" => "Sport Utility Vehicles",
        "sports" => "Sports Cars",
        "trucks" => "Trucks",
        "classic" => "Classic Cars",
        "about" => "About PHP Motors",
        "account" => "Your Account",
        "purchase" => "Purchase",
        "500" => "Server Error"
    );
    echo "<title>PHP Motors - " . $titles[$current_page] . "</title>";
    ?>

</head>
