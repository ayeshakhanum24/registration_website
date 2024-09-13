<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phno = $_POST['phno'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// Create connection
$conn = new mysqli('localhost', 'root', '@Mother7033', 'users');

// Check connection
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration (fname,lname,phone,email,password) values(?,?,?,?,?)");
    $stmt->bind_param("ssiss", $fname, $lname, $phno, $email, $pwd);
    $execval = $stmt->execute();
    header("Location: operations.html");
    $stmt->close();
    $conn->close();
}


