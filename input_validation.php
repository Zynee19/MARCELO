<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = filter_input(INPUT_POST, "name",  FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $age   = filter_input(INPUT_POST, "age",   FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]]);

    if (!$name || !$email || !$age) {
        die("Invalid ");
    }

    echo "Safe: Hello " . htmlspecialchars($name) . ", email $email, age $age";
}

?>
