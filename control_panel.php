<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control panel</title>
</head>

<body>

    <h1 id="title" style="text-align: center;">Robot arm control panel</h1>

    <br>
    <br>


    <div style="text-align: center;" dir="rtl">
        <form method="POST">
            <div style="display: inline-block;" >
                <label for="motor1">المحرك 1</label>
                <input type="range" min="0" max="180" step="1" id="motor1" name="motor1">
            </div>

            <div id="mt1" name="mt1" style="display: inline-block; width:40px"></div>

            <br>

            <div style="display: inline-block;">
                <label for="motor2">المحرك 2</label>
                <input type="range" min="0" max="180" step="1" id="motor2" name="motor2">
            </div>

            <div id="mt2" style="display: inline-block; width:40px"></div>

            <br>

            <div style="display: inline-block;">
                <label for="motor3">المحرك 3</label>
                <input type="range" min="0" max="180" step="1" id="motor3" name="motor3">
            </div>

            <div id="mt3" style="display: inline-block; width:40px"></div>

            <br>

            <div style="display: inline-block;">
                <label for="motor4">المحرك 4</label>
                <input type="range" min="0" max="180" step="1" id="motor4" name="motor4">
            </div>

            <div id="mt4" style="display: inline-block; width:40px"></div>

            <br>

            <div style="display: inline-block;">
                <label for="motor5">المحرك 5</label>
                <input type="range" min="0" max="180" step="1" id="motor5" name="motor5">
            </div>

            <div id="mt5" style="display: inline-block; width:40px"></div>

            <br>

            <div style="display: inline-block;">
                <label for="motor6">المحرك 6</label>
                <input type="range" min="0" max="180" step="1" id="motor6" name="motor6">
            </div>

            <div id="mt6" style="display: inline-block; width:40px"></div>

            <br>


            <div >

                <input type="radio" name="runn" value="تشغيل"> تشغيل
                <input type="radio" name="runn" checked value="ايقاف" > ايقاف
            </div>

            <br>

            <div>
                <input type="submit" name="submit" value="حفظ" style="width: 5cm;">
            </div>


        </form>
    </div>

    

    <script>
        var m1 = document.getElementById("motor1");
        var m2 = document.getElementById("motor2");
        var m3 = document.getElementById("motor3");
        var m4 = document.getElementById("motor4");
        var m5 = document.getElementById("motor5");
        var m6 = document.getElementById("motor6");


        var out1 = document.getElementById("mt1");
        out1.innerHTML = m1.value;
        var out2 = document.getElementById("mt2");
        out2.innerHTML = m2.value;
        var out3 = document.getElementById("mt3");
        out3.innerHTML = m3.value;
        var out4 = document.getElementById("mt4");
        out4.innerHTML = m4.value;
        var out5 = document.getElementById("mt5");
        out5.innerHTML = m5.value;
        var out6 = document.getElementById("mt6");
        out6.innerHTML = m6.value;


        m1.oninput = function() {
            out1.innerHTML = this.value;
        }
        m2.oninput = function() {
            out2.innerHTML = this.value;
        }
        m3.oninput = function() {
            out3.innerHTML = this.value;
        }
        m4.oninput = function() {
            out4.innerHTML = this.value;
        }
        m5.oninput = function() {
            out5.innerHTML = this.value;
        }
        m6.oninput = function() {
            out6.innerHTML = this.value;
        }

       
    </script>
</body>

</html>

<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";

$con = new mysqli($host, $username, $password, $dbname);

if (mysqli_connect_error()) {

    die('connect error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {

    if (isset($_POST['submit'])) {

        $motor = $_POST['motor1'];

        $query1 = "UPDATE servo SET value='$_POST[motor1]' where ID=1";
        mysqli_query($con, $query1);

        $query2 = "UPDATE servo SET value='$_POST[motor2]' where ID=2";
        mysqli_query($con, $query2);

        $query3 = "UPDATE servo SET value='$_POST[motor3]' where ID=3";
        mysqli_query($con, $query3);

        $query4 = "UPDATE servo SET value='$_POST[motor4]' where ID=4";
        mysqli_query($con, $query4);

        $query5 = "UPDATE servo SET value='$_POST[motor5]' where ID=5";
        mysqli_query($con, $query5);

        $query6 = "UPDATE servo SET value='$_POST[motor6]' where ID=6";
        mysqli_query($con, $query6);

        $query7 = "UPDATE servo SET value='$_POST[runn]' where ID=7";
        mysqli_query($con, $query7);
    }


    $con->close();
}

?>
