<?php
    function selectOne($num) { //for only one column
        include 'connToDB.php';
        $sql = "SELECT submitted, firstname, lastname, email, mobile, category, id FROM customers WHERE id= '$num'";
        $result = $conn->query($sql);
        return $result;
    }

    function selectAll() { //for all columns
        include 'connToDB.php';
        $sql = "SELECT submitted, firstname, lastname, email, mobile, category, id FROM customers";
        $result = $conn->query($sql);
        return $result;
    }
?>