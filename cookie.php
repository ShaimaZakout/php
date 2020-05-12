<?php

// delete a cookie
//setcookie("remember", "1", time()-100);


if (isset($_POST['username']) && isset($_POST['password'])) {

    //echo $_POST['username']." = ".$_POST['password'];

    if (isset($_POST['remember'])) {
        // send cookie

        setcookie("remember", 1, time()+3600);
        setcookie("username", $_POST['username'], time()+3600);

        //var_dump($res);

    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lets Make Cookies</title>
</head>
<body>
    <h1>
        Lets Make Cookies 😁:)
    </h1>
    <form method="post" >
        Username: <input type="text" name="username" /> <br/><br/>
        Password: <input type="password" name="password" /> <br/><br/>

        <input type="checkbox" name="remember" value="1" /> Remember me

        <input type="submit" value="Login" />
    </form>
    <br/>
    <br/>

    <ul>
        <?php

            foreach ($_COOKIE as $key => $cookie) {

                echo "<li>$key = $cookie</li>";

            }


        ?>
    </ul>
</body>
</html>