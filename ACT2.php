<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<bady>
    <!--  في هذا المثال نأخذ البيانات بالطريقتين كيت وبوست ونأخذها ونطبعها-->
    <!--    <form action="ACT2.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    
        <form action="ACT2.php" method="get">
            Name: <input type="text" name="name1"><br>
            E-mail: <input type="text" name="email2"><br>
            <input type="submit">
        </form>-->


    <!-- ex2  *************************************************************************************************************EX2 -->

    <form action="ACT2.php" method="POST">
        <input type="number" placeholder="Enter number here please" name="num">
        <input type="submit">
    </form>



    <?php
//    echo $_POST["name"] . "<br>";
//    echo $_POST["email"];
//    echo $_GET["name1"] . "<br>";
//    echo $_GET["email2"];
    echo '<br> ' . "************************************************************* EX2 <br>";

    /**
     * هنا نأخذ رقم من المستخدم ونرى هل هو زوجي ام فردي
     * 
     */
    $num = $_POST["num"];
    if ($num % 2 == 0) {
        echo $num . "  " . " is even number <br> ";
    } else {
        echo $num . "  " . "   is odd number <br>";
    }

    /**
     * في هذا المثال بدنا نستخدم سويتش عشان نطبع شو هو اليوم من خلال الميثود الجاهزة
     * date(حسب شو بدك تعمل)
     */
    echo '<br> ' . "************************************************************* EX3 <br>";
    $today = Date("D");
    switch ($today) {
        case "Sat":
            echo ' today is sat';
            break;
        case " Sund" :
            echo 'today is sun';
            break;
        case " Mon" :
            echo 'today is Mon';
            break;

        case "Tues" :
            echo 'today is tues';
            break;

        case " Wed" :
            echo 'today is WED';
            break;
        case "Fri" :
            echo 'today is Fri';
            break;
        default:
            echo 'other';
            break;
    }
    echo '<br> ' . "************************************************************* EX4 <br>";
    echo '<h2> The colors I love are : ';
    $arr = ["read", "white", "green"];
    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>  $value </li>";
    }
    echo '</ul>';
    /**
     * هنا من خلال وجود شرط داخل اللوب ان خالف الشرط يعمل بريك ويطلع
     */
    echo '<br> ' . "****************** EX5  *** PHP break (Single and Nested Loops)<br>";
    $arr1 = [1, 2, 3, 4, 5, 6, 7];
    foreach ($arr1 as $value) {
        if ($value == 4) {
            break;
        } else {
            echo "$value " . " ";
        }
    }
    echo "\n";
    /**
     * هنا نفس المثال الي فوق لكن من خلال نستيد لوب
     */
    echo '<br> ' . "****************** EX6  *** PHP break (Single and Nested Loops)<br>";
    $arr2 = array('A', 'B', 'C');
    $arr3 = array('C', 'A', 'B', 'D');
    foreach ($arr2 as $value) {
        echo $value . " ";
        foreach ($arr3 as $value1) {
            if ($value != $value1) {
                echo $value1;
            } else {
                break ;
            }
        }
    }
    echo '<br>';
       foreach ($arr2 as $value) {
        echo $value . " ";
        foreach ($arr3 as $value1) {
            if ($value != $value1) {
                echo $value1;
            } else {
                break 2 ;
            }
        }
    }
    ?>



</bady>
