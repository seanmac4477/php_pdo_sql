<?php

//change db_name, un and pw in connection string to ones matching your user credentials

try {
    $conn = new PDO("mysql:host=localhost;dbname=dn_name;charset=utf8", 'un', 'pw');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = 'Unable to connect to the database.'; //. $e->getMessage(); // uncomment and concatenate to retrieve a detailed error message for debugging
    echo $error;
    exit();
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP MySQL </title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="row">
            
            <h3>PHP PDO Connect to Database</h3>

            <?php
            $success = '<p style=color:blue>Connected to database</p>';
            echo $success;
            ?>

            <p>Content goes here.

        </div>

        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> Your Name - <a class="phone" href="tel:[+1-555-555-5555]">(555) 555-5555</a>&nbsp; - &nbsp;<a href="mailto:mail@gmail.com?Subject=Message%20Here" target="_top">Email Me</a></p>
        </div>

    </body>
</html>
