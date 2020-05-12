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
        /*         * *
         * first function is substr
         * لها عدت حالات عندما تكون سالبة نبدا العد من النهاية للنص ونبدأ العد من الواحد
         * عندما تكون قيمة احالات موجبة نبدأ العد من النهااية ونبدا العد من الصفر

         */
        $str = "abcdefg";
        echo $sub = substr($str, 2, 5) . "<br>"; //cdefg
        echo $sub = substr($str, 3, 2) . "<br>"; //de
        echo var_dump(substr($str, 1, 0)) . "<br>";    // ""
        echo $sub = substr($str, 1, 1) . "<br>";  //b
        echo $sub = substr($str, -2, 11) . "<br>"; //efg
        echo $sub = substr($str, -4) . "<br>";  //defg
        echo $sub = substr($str, -5, 2) . "<br>"; //cd
        echo $sub = substr($str, -5, 5) . "<br>"; //cdefg
        echo $sub = substr($str, -1, 5) . "<br>";
        echo $sub = substr($str, 0, 2) . "<br>";
        echo $sub = substr($str, 0) . "<br>";
        echo $sub = substr($str, 0, 15) . "<br>";
        echo $sub = substr($str, 1, -1) . "<br>";
        echo $sub = substr($str, 1, 5) . "<br>";
        echo $sub = substr($str, 3, -1) . "<br>";
        echo $sub = substr($str, 2, -2) . "<br>";
        echo $sub = substr($str, -2, 2) . "<br>";
        echo $sub = substr($str, 7, -7) . "<br>";
        echo var_dump(substr($str, 7, -7)) . "<br>";  //false
        echo var_dump(substr($str, -7, 7)) . "<br>";
        /*         * *
         * second method is strlen لحساب طول النص
         *
         */
        $str2 = "asjnjdcjcdkic";
        echo $length = strlen($str2) . "<br>";
        $str3 = "shaimaa Raed zakout";
        echo substr_replace($str3, "aya", 0, 7) . "<br>";
        echo substr_replace($str3, ",aya", strlen($str3), 7) . "<br>";
        echo substr_replace($str3, ",aya", strlen($str3)) . "<br>";
        echo substr_replace($str3, "aya",8 ,11) . "<br>";
        
        ?>
    </body>
</html>
