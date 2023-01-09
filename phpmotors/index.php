<!DOCTYPE html>
<html lang="en">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/head.php'; ?>

<body>
    <!-- get nav bar -->
    <?php

    // Get the database connection file
    require_once 'library/connections.php';
    // Get the PHP Motors model for use as needed
    require_once 'model/main-model.php';

    // Get the array of classifications
    $classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    $navList = '<ul class="main-nav" id="main_nav">';
    $navList .= "<li><a href='index.php?action=home' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $c) {
        $navList .= "<li>
        <a href='index.php?action=".strtolower(urlencode($c['classificationName']))."' 
        title='View our $c[classificationName] product line'>
            $c[classificationName]
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

    <!-- Header --> 
    <?php require_once 'snippets/header.php'; ?> 

    <!-- Main --> 
    <?php require_once 'main/' . $GLOBALS['current_page'] . '.php'; ?>

    <!-- Footer -->
    <footer>
        <?php require_once './snippets/footer.php'; ?>
    </footer>
</body>

</html>
