<?php
date_default_timezone_set("Asia/Kolkata");

$now = date("Y-m-d H:i:s");

if (isset($_COOKIE['last'])) {
    echo "Last visited on: " . $_COOKIE['last'] . "<br>";
} else {
    echo "This is your first visit!<br>";
}

setcookie("last", $now, time() + (365 * 24 * 60 * 60));

$file = "count.txt";

if (!file_exists($file)) {
    file_put_contents($file, "0");
}

$visits = (int) file_get_contents($file);
$visits++;

echo "You are visitor number: $visits";

file_put_contents($file, $visits);
?>
