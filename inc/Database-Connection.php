<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portfoliodb";


try {
    //try to establish database connection
    $db = new PDO('mysql:host=' . $dbhost  .';dbname=' . $dbname, $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

} catch (PDOException $e) {
    print "Ouch that ain't good!" . "<br>";
    print "Error!: " . $e->getMessage() . "<br/>";
}

?>