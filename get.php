<?php
// Define the file where logs will be stored
$logFile = 'logs.txt';

// Check if the POST request has the 'log' parameter
if (isset($_POST['log'])) {
    // Get the log data from the POST request
    $logData = $_POST['log'];

    // Sanitize the log data to avoid any issues
    $logData = filter_var($logData, FILTER_SANITIZE_STRING);

    // Open the log file for appending
    $fileHandle = fopen($logFile, 'a');

    if ($fileHandle) {
        // Write the log data to the file
        fwrite($fileHandle, $logData . "\n");
        // Close the file
        fclose($fileHandle);
        // Send a response to indicate success
        echo 'Log received';
    } else {
        // Send an error response if the file cannot be opened
        echo 'Error opening log file';
    }
} else {
    // Send an error response if the 'log' parameter is not set
    echo 'No log data received';
}
?>
