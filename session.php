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
        if (!empty($_POST['remember'])) {
            setcookie("remember", 1, time() + 3600);
            setcookie("username", $_POST['username'], time() + 3600);
            setcookie("password", $_POST['password'], time() + 3600);
        }

        if (isset($_POST['Login'])) {
            $_SESSION['user'] = ['name' => $_POST['username'], 'password' => md5($_POST['password'])];
            header("REFRESH:5 ; URL=next.php");
            //echo " <a href='ASS2.php?action=logout '>LogOut</a>";
        }
        ?>
        <form method="POST"  >
            username:  <input type="text" name="username" placeholder="Username"   required  value="<?php
        if (isset($_COOKIE["remember"])) {
            echo $_COOKIE["username"];
        }
        ?>" ><br><br>
            password:  <input type="password"name="password"  placeholder="Password"   required   value="<?php
            if (isset($_COOKIE["remember"])) {
                echo $_COOKIE["password"];
            }
            ?>"><br><br>
            <input type="checkbox" name="remember" >remember me <br><br>
            <input type="submit" name="Login">
        </form> 

    </body>
</html>
