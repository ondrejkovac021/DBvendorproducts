<?php

class Stopwatch
{
    private static $time;

    public static function start()
    {
        self::$time = microtime(true);
    }

    public static function stop()
    {
        printf(
            "[Stopwatch: %.6f ms]" . PHP_EOL,
            (microtime(true) - self::$time) * 1000
        );
        self::start();
    }
}
$products = 100;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO vendor(name) VALUES";
$a = 1;
while ($a <= 10) {
    $query .= " ('" . bin2hex(random_bytes(5)) . "'),";
    $a++;
}
$query = rtrim($query, ',') . ";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES";
$a = 1;
while ($a <= $products) {
    $query2 .= " ('" . bin2hex(random_bytes(6)) . "', 1),";
    $a++;
}
$query2 = rtrim($query2, ',') . ";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();

$result = $conn->query("SELECT * FROM vendor");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
$result = $conn->query("SELECT * FROM product");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}

$query = "INSERT INTO vendor(name) VALUES";
$a = 1;
while ($a <= 100) {
    $query .= " ('" . bin2hex(random_bytes(5)) . "'),";
    $a++;
}
$query = rtrim($query, ',') . ";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES";
$a = 1;
while ($a <= $products) {
    $query2 .= " ('" . bin2hex(random_bytes(6)) . "', 1),";
    $a++;
}
$query2 = rtrim($query2, ',') . ";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();

$result = $conn->query("SELECT * FROM vendor");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
$result = $conn->query("SELECT * FROM product");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}

$query = "INSERT INTO vendor(name) VALUES";
$a = 1;
while ($a <= 1000) {
    $query .= " ('" . bin2hex(random_bytes(5)) . "'),";
    $a++;
}
$query = rtrim($query, ',') . ";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES";
$a = 1;
while ($a <= $products) {
    $query2 .= " ('" . bin2hex(random_bytes(6)) . "', 1),";
    $a++;
}
$query2 = rtrim($query2, ',') . ";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();

$result = $conn->query("SELECT * FROM vendor");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
$result = $conn->query("SELECT * FROM product");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}

$conn->close();
