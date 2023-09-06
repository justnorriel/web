<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
<h1 class="title">User Form</h1>
    <div class="container">
    <label>Firstname: <?php echo $_GET["firstname"]; ?><br></label>
    <label>Middlename: <?php echo $_GET["middlename"]; ?><br></label>
    <label>Lastname: <?php echo $_GET["lastname"]; ?><br></label>
    <label>Birthday: <?php echo $_GET["birthday"]; ?><br></label>
    <label>Address: <?php echo $_GET["address"]; ?><br></label>
    </div>

</body>


</html>