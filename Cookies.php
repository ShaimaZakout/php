<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--1>

<?php
//في هذا المثال يأخذ اسم المستخدم ويجعله عنوان للصفحة واللون الذي يدخله يحعله لون لها
$colorPage;
$titlePage;
if (isset($_POST['send']) && isset($_POST['name']) && isset($_POST['color'])) {
    $colorPage = $_POST['color'];
    $titlePage = $_POST['name'];
    setcookie("name", " $titlePage", time() + 3600);
    setcookie("color", " $colorPage", time() + 3600);

}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titlePage;?> </title>
    </head>
    <body style="background-color:<?php echo $colorPage;?> ">

        <form action="#" method="POST">
            userName:     <input name="name"  type="text"><br><br>
            choose color :  <input name="color"  type="color"><br><br>
            <input name="send"  type="submit"><br><br>
        </form>
        <?php ?>
    </body>
</html>
