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
        $sname = $_POST['sname'];
        $semail = $_POST["semail"];
        $DOB = $_POST["DOB"];
        $rollno = $_POST["rollno"];
        $class = $_POST["class"];
        $chem_marks = $_POST["chem_marks"];
        $phy_marks = $_POST["phy_marks"];
        $compsc_marks = $_POST["compsc_marks"];
        $sql = "Update result set `name`='$sname' , `email` = '$semail' , `D.O.B`='$DOB' , `class` ='$class' , `chem_marks` = '$chem_marks' , `phy_marks`='$phy_marks' , `compsc_marks`='$compsc_marks' where `rollno`='$rollno'";
        mysqli_query($connect, $sql);
        echo("Result updated successfully !!");
        header('refresh:4;url=http://localhost/phpsem5/resultmanagment/teacher_login.html');
    }
}
