<?php

function html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function htmlout($text) {
    echo html($text);
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP MySQL Read Input</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="row">

            <h3>Read User Input w Output Escaping</h3>

            <p>Proper output escaping with PHP function htmlspecialchars.</p>


            <?php
            try {
                $conn = new PDO("mysql:host=localhost;dbname=db_name; charset=utf8", 'un', 'pw');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $output = 'Unable to connect to the database server.';
                echo $output;
                exit();
            }

            try {
                //$space = ' - ';
                $sql = 'SELECT first_name, last_name, email, phone FROM contacts';
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(); //array
            } catch (Exception $ex) {
                $error = 'Unable to select data.' . $ex->getMessage();
                echo $error;
                exit();
            }
            echo '<table>';
            foreach ($result as $row) {
                echo '<tr><td>';
                echo htmlout($row["first_name"]) . '</td><td>';
                echo htmlout($row["last_name"]) . '</td><td>';
                echo htmlout($row["email"]) . '</td><td>';
                echo htmlout($row["phone"]) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            $conn = null;
            ?>

        </div>

        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> Your Name - <a class="phone" href="tel:[+1-555-555-5555]">(555) 555-5555</a>&nbsp; - &nbsp;<a href="mailto:mail@gmail.com?Subject=Message%20Here" target="_top">Email Me</a></p>
        </div>

    </body>
</html>
