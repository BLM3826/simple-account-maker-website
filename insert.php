<?php

    function insertForm(){
        if(isset($_POST['submitbtn'])) {
            //data
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $category = $_POST['category'];
            date_default_timezone_set("Europe/Athens"); //to fix the timezone
            $submitted = date('Y-m-d H:i:s');
            //database call
            include 'connToDB.php';
            //insert
            $insert = $conn->prepare("INSERT INTO customers(submitted,firstname,email,lastname,mobile,category) values(?,?,?,?,?,?)");
            $insert->bind_param("ssssis", $submitted, $firstname, $email, $lastname, $mobile, $category);
            $insert->execute();
            $insert->close();
            $conn->close();
            header( "Location: index.php" );    //go to customers
        }
    }

    function insertJSON(){
        include 'connToDB.php';
        if(isset($_POST['buttomImport'])) {
            copy($_FILES['jsonFile']['tmp_name'], $_FILES['jsonFile']['name']);
            $data = file_get_contents($_FILES['jsonFile']['name']);
            $products = json_decode($data);
            foreach ($products as $product) {
                $insert = $conn->prepare("INSERT INTO customers(submitted,firstname,email,lastname,mobile,category) values(?,?,?,?,?,?)");
                $insert->bind_param("ssssis", $product->Submitted, $product->firstname, $product->email, $product->lastname, $product->mobile, $product->category);
                $insert->execute();
            }
            $insert->close();
            $conn->close();
            echo "<br>Success! Refresh the page.";
            // header("Refresh:0");
        }
    }
?>

