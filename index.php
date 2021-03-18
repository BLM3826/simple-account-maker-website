<!DOCTYPE html>
<html lang="">

<head>
    <title>All Customers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <h2>Customers</h2>
    <table class="table table-hover" border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Category</th>
                <th>Submitted</th>
            </tr>
        </thead>
        <tbody>
    <?php 
        include 'select.php';
        $result=selectAll();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
    ?>
    
        <tr onclick="window.location='editform.php?id=<?php echo $row['id']; ?>'" id="<?php echo $row['id']; ?>">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['submitted']; ?></td>
        </tr>	
    
    <?php
           }
        } else {
            echo "0 results";
        }
    ?>
        </tbody>
    </table>
    <input type="submit" class="btn btn-success" id="addnew" value="+ Add new Customer" name="addnew" onclick="window.location.href='entryform.php'">


    <form method="POST" enctype="multipart/form-data" id="jsonform">
        Find and pick the JSON file: <br><br><input type="file" name="jsonFile" accept=".json" id="jpick">
        <br>
        <input type="submit" class="btn btn-success" value="Import JSON data" name="buttomImport">
        <input type="submit" class="btn btn-success" value="Refresh Page" name="refresh" onclick="window.location.reload();">
	</form>

    <?php
        include 'insert.php';
        insertJSON();
    ?>
</body>
</html>