# src/mongodb.php

<?php
   // PHP version 7.4 used here
    try {
        // connect to OVHcloud Public Cloud Databases for MongoDB (cluster in version 4.4, MongoDB PHP Extension in 1.8.1)
        $m = new MongoDB\Driver\Manager('mongodb://root:password@mongo:27017/?authSource=admin');
        echo "Connection to database successfully" . PHP_EOL;
        // display the content of the driver, for diagnosis purpose
        var_dump($m);
    }
    catch (Throwable $e) {
        // catch throwables when the connection is not a success
        echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
    }
?>