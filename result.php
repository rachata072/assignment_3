<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit();
}

// Get the input values
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

// Check if Z is zero
if ($z == 0) {
    echo "<html><body>";
    echo "<h2>Error!</h2>";
    echo "<p>Z cannot be zero (division by zero error)</p>";
    echo "<p><a href='index.php'>Go Back</a></p>";
    echo "</body></html>";
    exit();
}

// Check if inputs are numbers
if (!is_numeric($x) || !is_numeric($y) || !is_numeric($z)) {
    echo "<html><body>";
    echo "<h2>Error!</h2>";
    echo "<p>Please enter valid numbers only</p>";
    echo "<p><a href='index.php'>Go Back</a></p>";
    echo "</body></html>";
    exit();
}

// Call the Python script
$command = "python3 /var/www/html/process_input.py $x $y $z";
$output = shell_exec($command);

// Display the output
if ($output) {
    echo $output;
} else {
    echo "<html><body>";
    echo "<h2>Error!</h2>";
    echo "<p>Could not run Python script. Check if:</p>";
    echo "<ul>";
    echo "<li>Python script exists</li>";
    echo "<li>Script has execute permissions</li>";
    echo "<li>Python3 is installed</li>";
    echo "</ul>";
    echo "<p><a href='index.php'>Go Back</a></p>";
    echo "</body></html>";
}
?>