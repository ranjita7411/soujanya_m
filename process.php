<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Registration Successful!</h2>

    <h3>Your Submitted Information:</h3>

    <p><strong>Full Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>

</div>

</body>
</html>
