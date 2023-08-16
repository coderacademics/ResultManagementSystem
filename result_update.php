<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allura&family=Kaushan+Scrip&family=Merriweather:ital@1&display=swap');
        button{
            padding: 0.4em;
            font-size: 1em;
            border-radius: 5%;
        }
        button:hover{
            background-color: black;
            color: white;
            cursor: pointer;
        }
    </style>
    <title>Result Management</title>
</head>

<body style="background-image: url(../resultmanagment/result_input_bg.jpg);">
    <h2 style="text-align:center;font-family: 'Merriweather', serif;">Welcome to Result Update System</h2>
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
            $sql = "select * from result where `rollno`='$rollno' and `D.O.B`='$dob'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) >= 1) {
                $data = mysqli_fetch_assoc($result);
    ?>

                <form method="post" action="../resultmanagment/update_result_success.php" style="margin-top: 2em; margin-left: 30em; margin-right: 30em; padding: 2em; border-radius: 10px;background-color: white; opacity: 0.75; font-family: 'Merriweather', serif;">
                    <p>Current Name : <b> <?php echo ($data["name"]) ?> </b></p>
                    <label for="sname" >New Student Name</label>
                    <input type="text"  id="sname" name="sname">
                    <p>Current Email Address :<b> <?php echo ($data["email"]) ?></b></p>
                    <label for="semail" >New Email address</label>
                    <input type="email"  id="semail" name="semail">
                    <p>Current D.O.B : <b><?php echo ($data["D.O.B"]) ?></b></p>
                    <label for="DOB" >New Date of Birth</label>
                    <input type="date" id="DOB" name="DOB">
                    <br>
                    <br>
                    <label for="rollno" >Roll No. <em>(Cannot be changed !!)</em></label>
                    <input type="text" readonly id="rollno" name="rollno" value=<?php echo ($data["rollno"]) ?>>
                    <p>Current class: <b><?php echo ($data["class"]) ?></b></p>
                    <label for="class" >New Class</label>
                    <input type="text" id="class" name="class">
                    <p>Current English marks: <b><?php echo ($data["eng"]) ?></b></p>
                    <label for="eng" >New English Marks</label>
                    <input type="number"  id="eng" name="eng">
                    <p>Current Mathematics marks: <b><?php echo ($data["maths"]) ?></b></p>
                    <label for="maths" >New Mathematics Marks</label>
                    <input type="number"  id="maths" name="maths">
                    <p>Current Chemistry marks: <b><?php echo ($data["chem_marks"]) ?></b></p>
                    <label for="chem_marks" >New Chemistry Marks</label>
                    <input type="number"  id="chem_marks" name="chem_marks">
                    <p>Current Physics Marks : <b><?php echo ($data["phy_marks"]) ?></b></p>
                    <label for="phy_marks" >New Physics Marks</label>
                    <input type="number" id="phy_marks" name="phy_marks">
                    <p>Current Computer Science Marks : <b><?php echo ($data["compsc_marks"]) ?></b></p>
                    <label for="compsc_marks" >New Computer Science Marks</label>
                    <input type="number"  id="compsc_marks" name="compsc_marks">
                    <br>
                    <br>
                    <button type="submit">Update</button>
                </form>
    <?php

            } else {
                header('Location:result_not_found.php');
            }
        }
    }
    ?>
</body>

</html>