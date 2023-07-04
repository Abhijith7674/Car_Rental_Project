
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental - Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $username = $_POST["un"];
    $password = $_POST["pwd"];
    $admin_username = "admin";
    $admin_password = "password";

    if ($username == $admin_username && $password == $admin_password) {
        header("Location: ./panel.php");
        exit;
    } else {
        echo "Invalid username or password. Please try again.";
    }
    ?>
</body>

</html>
