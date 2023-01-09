<!DOCTYPE html>
<html lang="en">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/head.php'; ?>

<body>
    <!-- Header -->
    <?php

    // Get the database connection file
    require_once 'library/connections.php';
    // Get the PHP Motors model for use as needed
    require_once 'model/main-model.php';

    // Get the array of classifications
    $classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    $navList = '<ul class="main-nav" id="main_nav">';
    $navList .= "<li><a href='home.php?action=home' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
    $navList .= "<li>
    <a href='home.php?action=".strtolower(urlencode($classification['classificationName']))."' title='View our $classification[classificationName] product line'>$classification[classificationName]
    </a>
    </li>";
    }

    $navList .= '</ul>';
    $query_string = filter_input(INPUT_GET, "action", FILTER_DEFAULT);

    if ($query_string == '') {
        $current_page = 'home';
    } else {
        $current_page = $query_string;
    }

    ?>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/header.php'; ?> 

    <!-- Main -->
    
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/main/' . $GLOBALS['current_page'] . '.php'; ?>

    <!-- Footer -->
    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>

</html>
