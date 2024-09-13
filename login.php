<?php
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$conn = new mysqli('localhost', 'root', '@Mother7033', 'users');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection success";
    $stmt = $conn->prepare("SELECT email, password FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        // User found
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
        if ($pwd === $stored_password) {
            header("Location: operations.html");
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User with this email does not exist.";
    }
    
    $stmt->close();
    $conn->close();
}
?>
