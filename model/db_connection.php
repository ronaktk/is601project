// Creating a database connection
<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=rtp8';
    $username = 'rtp8';
    $password = 'ps92xjdJ';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
        $error_message = $e->getMessage();
	echo $error_message;
	exit();
    }
?>
