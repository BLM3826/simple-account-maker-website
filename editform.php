<!DOCTYPE html>
<html lang="">

<head>
    <title>Update Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
        $num= $_GET['id'];
        include 'select.php';
        $result=selectOne($num);
        while ($row = $result->fetch_assoc()) {
    ?>

    <div class="container">
        <h2>Edit or change the data here: </h2>
        <form action="index.php">
            <div class="form-group">
                <label for="firstname">First name:</label><br>
                <input type="text" id="firstname" name="firstname" value= "<?php echo $row['firstname']; ?>" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label><br>
                <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="mobile">Phone number:</label><br>
                <input type="tel" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="category">Category: </label>
                <select id="category" name="category" required>
                    <option value="Cleanings" <?php if ($row['category']=="Cleanings") {echo "selected";} ?> >Cleanings</option>
                    <option value="EPC" <?php if ($row['category']=="EPC") {echo "selected";} ?>>EPC</option>
                    <option value="EICR" <?php if ($row['category']=="EICR") {echo "selected";} ?>>EICR</option>
                    <option value="Other" <?php if ($row['category']=="Other") {echo "selected";} ?>>Other</option>
                </select>
            </div>
            <button id="updatebtn" class="btn btn-default" onclick="update()">Update</button>
        </form>
         
    </div>
    <?php
        }
    ?>

<script>
function update() {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var mobile = $('#mobile').val();
            var category = $('#category').val();
            var id = '<?php echo $_GET["id"]; ?>';
            $.ajax({
                type: "POST",
                data: { 'firstname': firstname, 'lastname': lastname, 'email': email, 'mobile': mobile, 'category': category, 'id': id },
                url: 'update.php',
                success: function(data) {

                }
            })
        }
</script>
</body>
</html>