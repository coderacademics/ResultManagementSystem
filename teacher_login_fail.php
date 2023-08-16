<!DOCTYPE html>
<html lang="en">

<head>
    <title>Result Management System</title>
</head>

<body style="background-image: url(../resultmanagment/teacherbg.jpg);">
    <h1 style="text-align: center; margin-top:8em; color:red">Incorrect Credentials!!</h1>
    <h2  style="text-align: center; margin-top:6em; color:red">Redirecting you to the login page .. </h2>
    <?php 
    header("Refresh:4;url=http://localhost/phpsem5/resultmanagment/login.html");
    ?>
</body>

</html>