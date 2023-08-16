<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Result</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allura&family=Kaushan+Scrip&family=Merriweather:ital@1&display=swap');
    </style>
    <title>Result Delete</title>
</head>

<body style="background-image:url(../resultmanagment/result_input_bg.jpg);">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = mysqli_connect($servername, $username, $password);
    $tableName = "result";
    if (!$connect) {
        die("Sorry we are unable to connect to the server !!" . mysqli_connect_error());
    } else {
        $dbname = "result";
        mysqli_select_db($connect, $dbname);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dob = $_POST["DOB"];
            $rollno = $_POST["rollno"];
            $sql = "Delete from result where `rollno`='$rollno' and `D.O.B`='$dob'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_affected_rows($connect) == 1) {
    ?>
                <h2 style="text-align:center;margin-top: 7em;">Result deleted successfully!!<br />Redirecting to main page ....
                </h2>
    <?php
                echo("<h1>Result deleted successfully!</h1>");
            } else {
               echo("<h1>Result NOT FOUND !!</h1>");
            }
        }
    }
    ?>