<?php

//change db_name, un and pw in connection string to ones matching your user credentials
//id column not needed in sql, will auto increment in database

try {
    $conn = new PDO("mysql:host=localhost;dbname=db_name; charset=utf8", 'un', 'pw');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server.';
    echo $output;
    exit();
}

try {
    $sql = "INSERT INTO contacts (first_name, last_name, email, phone)
    VALUES 
    ('Wild E','Cayote','wilde@cayote.com','111-111-1111'),
    ('Mike','Smith','wilde@cayote.com','111-111-1111'),
    ('Road','Runner','roadrunner@cayote.com','222-111-1111')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
