<?php
//connection establishment
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername, $username, $password);
$tableName = "result";
if (!$connect) {
    die("Sorry we are unable to connect to the server !!" . mysqli_connect_error());
} else {
    $dbname="result";
    mysqli_select_db($connect,$dbname);
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        // print_r($_POST);
        $sname=$_POST['sname'];
        $semail=$_POST["semail"];
        $DOB=$_POST["DOB"];
        // echo($DOB);
        $rollno=$_POST["rollno"];
        $class=$_POST["class"];
        $chem_marks=$_POST["chem_marks"];
        $phy_marks=$_POST["phy_marks"];
        $compsc_marks=$_POST["compsc_marks"];
        $sql="INSERT INTO `result` (`name`, `rollno`, `D.O.B`, `class`, `compsc_marks`, `phy_marks`, `chem_marks`, `email`) VALUES ('$sname','$rollno','$DOB','$class','$compsc_marks','$phy_marks','$chem_marks','$semail')";
        mysqli_query($connect,$sql);
        echo("<h1>Result input successful!!</h1>");
    }
  
}
