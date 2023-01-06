<!DOCTYPE html>
<html lang="en">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/head.php'; ?>

<body>
    <!-- Header -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/header.php'; ?>

    <!-- Main -->
    <?php
    $url = parse_url($_SERVER['REQUEST_URI']);
    if (array_key_exists('query', $url)) {
        parse_str($url['query'], $params);
        if (array_key_exists('page', $params)) {
            $current_page = $params['page'];
        } else {
            $current_page = 'home';
        }
    } else {
        $current_page = 'home';
    }

    echo $current_page;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/main/' . $current_page . '.php';
    ?>

    <!-- Footer -->
    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/footer.php'; ?>
    </footer>
</body>

</html>
