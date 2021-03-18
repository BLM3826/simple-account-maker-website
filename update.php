<?php
    //data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $category = $_POST['category'];
    $num = $_POST['id'];
    //database call
    include 'connToDB.php';
    include 'select.php';
    //update
    $sql = "UPDATE customers SET firstname= '$firstname',email= '$email',lastname= '$lastname',mobile= '$mobile',category= '$category' WHERE id='$num'";
    $update = $conn->prepare($sql);
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    $update->execute();
    $update->close();
    $conn->close();

?>