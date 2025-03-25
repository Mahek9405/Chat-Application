<!-- <?php

$dsn = 'mysql:host=localhost;port=4306; dbname=chatapp';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
}
catch(PDOException $e){
    echo "Connection Error! ". $e->getMessage();
}
?> -->

<?php

$dsn = 'mysql:host=localhost;port=4306;dbname=chatapp;charset=utf8mb4';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "Database Connected Successfully!";
} catch (PDOException $e) {
    die("Connection Error! " . $e->getMessage());
}

?>
