<?php
// In a real-world scenario, use a database for storing user information.

$valid_credentials = array(
    'username' => 'demo',
    'password' => 'password123'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_credentials['username'] && $password === $valid_credentials['password']) {
        // Authentication successful, redirect to a new page with JavaScript
        echo '<script>
                window.onload = function() {
                    var popup = window.open("https://jtsportal.my.canva.site/", "_blank", "width=600, height=400");
                    if (window.focus) { popup.focus(); }
                };
              </script>';
    } else {
        echo "Invalid username or password.";
    }
}
?>
