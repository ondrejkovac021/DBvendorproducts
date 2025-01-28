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

$query = "INSERT INTO vendor(name) VALUES";

$a = 1;
while ($a <= 10) {
    $query = $query." (".random_bytes(5)."),";
    $a++;
}
$query = $query.";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES"

$a = 1;
while ($a <= $products) {
    $query = $query." (".random_bytes(6).", 1),";
    $a++;
}
$query = $query.";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();
// ----------

$query = "INSERT INTO vendor(name) VALUES";

$a = 1;
while ($a <= 100) {
    $query = $query." (".random_bytes(5)."),";
    $a++;
}
$query = $query.";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES"

$a = 1;
while ($a <= $products) {
    $query = $query." (".random_bytes(6).", 1),";
    $a++;
}
$query = $query.";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();
// ----------

$query = "INSERT INTO vendor(name) VALUES";

$a = 1;
while ($a <= 1000) {
    $query = $query." (".random_bytes(5)."),";
    $a++;
}
$query = $query.";";

$query2 = "INSERT INTO product(name, vendor_id) VALUES"

$a = 1;
while ($a <= $products) {
    $query = $query." (".random_bytes(6).", 1),";
    $a++;
}
$query = $query.";";

Stopwatch::start();
$conn->query($query);
$conn->query($query2);
Stopwatch::stop();
// ----------
