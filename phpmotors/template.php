<!DOCTYPE html>
<html lang="en">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/head.php'; ?>    
<body>
    <!-- Header -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/header.php'; ?>    

    <!-- Main -->
    <main>
        <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/main/' . $current_page; 
        ?>    
    </main>    
    <!-- Footer -->
    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/cse340/phpmotors/snippets/footer.php'; ?> 
    </footer>
</body>
</html>
