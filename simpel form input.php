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
        <form action="ASS1.php" method="POST">
            <p> Name : <input type="text" name="Name" placeholder="Enter your Name" required=""></p> 
            <p> Email :<input type="email" name="Email" placeholder="Enter your Name" required=""></p>
            <p> Age : <input type="number" name="Age" placeholder="Enter your Age" required=""></p>
            Gender:   
            <input type="radio" name="gender" value="fmale"> Female
            <input type="radio" name="gender"  value="male">Male
            <input type="radio" name="gender" value="other">Other
            <p>  <select name="type" required>
                    <option>Full_Time_Employee</option>
                    <option>Part_Time_Employee</option>
                </select></p>
            <input type="submit">
        </form>


        <?php

        abstract class Employee {
             public $name;
            public $Age;
            public $type;
            public $gender;
            public $email;

            abstract function printInfo();
        }

        class Part_Time_Employee extends Employee {

            public function printInfo() {
                echo " Name : " . $this->name . "<br>" . "Email : " . $this->email .
                "<br>" . "Age : " . $this->Age . "<br>" . "Gender : " . $this->gender . "<br>" . "type : " . $this->type;
            }

        }

        class Full_Time_Employee extends Employee {

            public function printInfo() {
                echo " Name : " . $this->name . "<br>" . "Email : " . $this->email .
                "<br>" . "Age : " . $this->Age . "<br>" . "Gender : " . $this->gender . "<br>" . "type : " . $this->type;
            }

        }
//
//        if (isset($_POST["Name"], $_POST["Email"], $_POST["Age"], $_POST["gender"], $_POST["type"])
//        ) {
//            $typeOFem = $_POST["type"];
//            $obj = new $typeOFem;
//            $obj->name = $_POST["Name"];
//            $obj->Age = $_POST["Age"];
//            $obj->email = $_POST["Email"];
//            $obj->type = $_POST["type"];
//            $obj->gender = $_POST["gender"];
//            $obj->printInfo();
//        }
         if ($_POST["type"] == "full time employee") {
            $obj->name = $_POST["Name"];
            $obj->Age = $_POST["Age"];
            $obj->email = $_POST["Email"];
            $obj->type = $_POST["type"];
            $obj->gender = $_POST["gender"];
            $obj->printInfo();
        }
        else{
               $obj->name = $_POST["Name"];
            $obj->Age = $_POST["Age"];
            $obj->email = $_POST["Email"];
            $obj->type = $_POST["type"];
            $obj->gender = $_POST["gender"];
            $obj->printInfo();
        }
        ?>
    </body>
</html>
