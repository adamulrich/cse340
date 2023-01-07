<?php 
function phpmotorsConnect(){
 $server = 'localhost';
 $dbname= 'phpmotors';
 $username = 'iClient';
 $password = 'b@2A!g!Ccptt7@q5'; 
 $dsn = "mysql:host=$server;dbname=$dbname";
 $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

 // Create the actual connection object and assign it to a variable
 try {
    $link = new PDO($dsn, $username, $password, $options);
    echo "success";
    return $link;
 } catch(PDOException $e) {
  header('Location: ../home.php?page=500');
  exit;
 }
}

phpmotorsConnect();

?>