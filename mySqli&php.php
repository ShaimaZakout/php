<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form method="POST"  >
            username:  <input type="text" name="patient_id" placeholder="patient_id"   required ><br>
            password:  <input type="text"name="doctor_id"  placeholder="doctor_id"   required ><br>
            <input type="submit" name="Login"><br>
        </form> 
        <?php
        $host = "localhost";
        $userName = "shaimaa";
        $password = "SHaimaa2382000?";
        $dbName = "hospital";
        //هنا عمل اتصال مع الداتا بيز
        $result = mysqli_connect($host, $userName, $password, $dbName);

        if ($result) {    // اذا كان هناك خطأ اطبع لنا الخطا الموجود 
            echo 'connect';
        } else {
            //هنا داي تطبع الخطأ الموجود 
            die("the error is : " . mysqli_connect_error());
        }
        echo '<br>';
         if (isset($_POST['Login'])) {
             $paId=$_POST["patient_id"];
             $doId=$_POST["doctor_id"];
            $query = "INSERT INTO `doctor_patient`(`patient_id`, `doctor_id`) VALUES ($doId,$paId)";
            $mysqli_query = mysqli_query($result, $query);

            if ($mysqli_query) {
                echo 'true';
            } else {
                echo 'error';
            }
//            $query2 = "DELETE FROM `doctor_patient` WHERE  `patient_id`=11 AND`doctor_id`=2";
//            $mysqli_query2 = mysqli_query($result, $query2);
        }
        ?>

    </body>
</html>
