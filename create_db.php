<?php
try {
    $conn = new PDO("mysql:host=localhost; charset=utf8", 'un', 'pw');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = 'Unable to connect to the database server.';
    echo $error;
    exit();
}

try {
    $sql = 'CREATE DATABASE db_name';
    $conn->exec($sql);
} catch (PDOException $e) {
    $error = 'Error creating database.'; //. $e->getMessage(); // uncomment and concatenate to retrieve a detailed error message for debugging
    echo $error;
    exit();
}

$success = htmlspecialchars('Database successfully created.');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP PDO SQL Create Database</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

    <body>

            <p>
                <?php echo $success; ?>
            </p>

    </body>
</html>


