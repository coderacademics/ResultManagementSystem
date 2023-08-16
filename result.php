<html lang="en">

<head>
    <style>
        .table {
            width: 75vw;
            margin: 10em auto 0 auto;
            text-align: center;
            border: 3px solid black;
        }
        th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>Result</title>
</head>

<body>
    
    <?php
    //connection establishment
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = mysqli_connect($servername, $username, $password);
    $tableName = 'result';
    if (!$connect) {
        die("Sorry we are unable to connect to the server !!" . mysqli_connect_error());
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // print_r($_POST);
            $semail = $_POST["semail"];
            $DOB = $_POST["DOB"];
            mysqli_select_db($connect, "result");
            $sql = "select * from result where `email`='$semail' and `D.O.B`= '$DOB'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result)<1) {
    ?>
                <h1 style="text-align: center;top:5em">404 FILE NOT</h1>
            <?php
            } else {
                $data = mysqli_fetch_assoc($result);
                // print_r($data);
            ?>
                <table class="table ">
                    <thead>
                        <tr>
                            <td colspan="4">Candidate Name: <b><?php echo ($data["name"]) ?></b></td>
                        </tr>
                        <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Full Marks</th>
                            <th scope="col">Marks Obtained</th>
                            <th scope="col">% Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">English</th>
                            <td>100</td>
                            <td><?php echo ($data["eng"]) ?></td>
                            <td><?php echo ($data["eng"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Mathematics</th>
                            <td>100</td>
                            <td><?php echo ($data["maths"]) ?></td>
                            <td><?php echo ($data["maths"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Chemistry</th>
                            <td>100</td>
                            <td><?php echo ($data["chem_marks"]) ?></td>
                            <td><?php echo ($data["chem_marks"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Computer Science</th>
                            <td>100</td>
                            <td><?php echo ($data["compsc_marks"]) ?></td>
                            <td><?php echo ($data["compsc_marks"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Physics</th>
                            <td>100</td>
                            <td><?php echo ($data["phy_marks"]) ?></td>
                            <td><?php echo ($data["phy_marks"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Marks Obtained</th>
                            <td colspan="3"><?php echo ($data["chem_marks"] + $data["phy_marks"] + $data["compsc_marks"]+$data["eng"]+$data["maths"]) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Grade</th>
                            <td colspan="3"><?php 
                            $total =($data["chem_marks"] + $data["phy_marks"] + $data["compsc_marks"]+$data["eng"]+$data["maths"]) / 5;
                            $grade ="";
                            if($total >= 80)
                                $grade="A";
                            else if($total>=60 && $total <80)
                                $grade="B";
                            else if($total >=40 && $total <60)
                                $grade ="C";
                            else
                                $grade="D";
                            echo("<b>$grade</b>");
                            ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
    <?php
            }
        }
    }
    ?>
</body>

</html>