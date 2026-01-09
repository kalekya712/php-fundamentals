<?php
// Handling form data safely

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    echo "Hello, " . $name;
}
?>