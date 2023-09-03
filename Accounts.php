<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Basic validation (you should add more robust validation)
    if (empty($email) || empty($password)) {
        echo "Both email and password are required.";
    } else {
        // In a real-world application, you would query the database to validate the user's credentials.
        // For demonstration purposes, we'll assume a static username and password.
        $validEmail = "user@example.com";
        $validPassword = "password123";

        if ($email === $validEmail && $password === $validPassword) {
            echo "Sign-in successful!";
            // You can redirect the user to a dashboard or another page here.
        } else {
            echo "Invalid email or password. Please try again.";
        }
    }
}
?>
