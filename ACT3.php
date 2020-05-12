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
        <?php
        $car = array("car1" => array("make" => "toyota", "color" => "green", "year" => "1999", "engine" => "1989"),
            "car2" => array("make" => "toyota", "color" => "read", "year" => "1789", "engine" => "1841"));
        foreach ($car as $key1 => $value) {
            echo "<h1>the information of $key</h1> ";
            foreach ($value as $key => $value1) {
                echo " $key" . "=>" . "$value1" . "<br>";
            }
        }
        ?>
    </body>
</html>
