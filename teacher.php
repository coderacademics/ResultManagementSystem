<?php
//connection establishment
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername, $username, $password);
$tableName = "teacher";
if (!$connect) {
    die("Sorry we are unable to connect to the server !!" . mysqli_connect_error());
} else {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $teacher_email=$_POST["temail"];
        $password=$_POST["password"];
        $dbname = "result";
        mysqli_select_db($connect, $dbname);
        $sql="select * from `teacher` where `teacher_email` = '$teacher_email' and `password` = '$password'";
        $result=mysqli_query($connect,$sql);
        if($result == true && mysqli_num_rows($result)>=1)
        {
            header('Location:teacher_login_success.html');
        }
        else{
           echo("<h1>Invalid Credentials!!</h1>");
        }
    }
    
}
