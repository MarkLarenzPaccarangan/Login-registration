<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <?php
        // Check if user data is available in session
        if (isset($_SESSION["user"])) {
            // Display Welcome message and fullname
            $fullName = $_SESSION["user"]["full_name"];
            echo "<h1>Welcome to Dashboard, $fullName!</h1>";
            echo "<a href='logout.php' class='btn btn-warning'>Logout</a>";
        } else {
            // Redirect to login page if user data is not available
            header("Location: login.php");
            exit;
        }
        ?>
    </div>
</body>
</html>
