<?php


// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the data string
$data = "Username: $username\nEmail: $email\nPassword: $password\n\n";

// Specify the file to save the data
$file = 'user_data.txt';

// Open the file in append mode
$fp = fopen($file, 'a');

// Write the data to the file
if (fwrite($fp, $data)) {
    echo "User data saved successfully";
} else {
    echo "Error: Unable to save user data";
}

// Close the file
fclose($fp);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>