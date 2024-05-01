<?php
require 'db.php';

try {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO TOPS_USER (USER_FNAME, USER_LNAME, USER_ADDRESS, USER_GENDER, USER_EMAIL) VALUES (:fname, :lname, :address, :gender, :email)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
    
    $stmt->execute();

    echo "User created successfully.";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
