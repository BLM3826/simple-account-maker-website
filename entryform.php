<?php
    include 'insert.php';
    insertForm();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Please enter your credentials here: </h2>
        <form method="POST">
            <div class="form-group">
                <label for="firstname">First name:</label><br>
                <input type="text" id="firstname" name="firstname" placeholder="First name" value="" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label><br>
                <input type="text" id="lastname" name="lastname" placeholder="Last name" value="" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label><br>
                <input type="email" id="email" name="email" placeholder="Email address" value="" required>
            </div>
            <div class="form-group">
                <label for="mobile">Phone number:</label><br>
                <input type="tel" id="mobile" name="mobile" placeholder="Phone number" value="" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="category">Category: </label>
                <select id="category" name="category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="Cleanings">Cleanings</option>
                    <option value="EPC">EPC</option>
                    <option value="EICR">EICR</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <button type="submit" id="submitbtn" class="btn btn-default" name="submitbtn">Sign Up</button>
        </form>
    </div>

</body>

</html>