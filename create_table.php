<?php

//change db_name, un and pw in connection string to ones matching your user credentials

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_name; charset=utf8", 'un', 'pw');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server.';
    echo $output;
    exit();
}

try {
    $sql = 'CREATE TABLE contacts (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,   
        first_name VARCHAR(255) NOT NULL,   
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(15) NOT NULL
      ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
    $conn->exec($sql);
} catch (PDOException $e) {
    $output = 'Error creating table: ' . $e->getMessage();
    echo $output;
    exit();
}

$output = htmlentities('Table successfully created.');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <title>create table</title>
    </head>
    <body>
        <?php echo $output; ?>
    </body>
</html>
