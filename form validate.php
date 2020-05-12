<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <?php
        if (isset($_POST["send"])) {
            $username = $_POST['name'];
            $password = $_POST['pswd'];


            if (($username != null) and ($password != null)) {
                $_SESSION["Username"] = $username;
                setcookie("name", $username, time() + 36000);
                setcookie("pswd", $password, time() + 36000);

                if (!empty($_POST["remember"])) {
                    setcookie("remember", $_POST["remember"], time() + 36000);
                }
            }
            header("Location: NEXTpAGE.php");
        }
        ?>

        <style>


            body {font-family: Arial, Helvetica, sans-serif; background-color: #ddd;}
            * {box-sizing: border-box;}

            .form-inline {  
                display: flex;
                flex-flow: row wrap;
                align-items: center;
            }

            .form-inline label {
                margin-top  :15px ;
            }

            .form-inline input {
                vertical-align: middle;
                margin: 10px 10px 5px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
            }

            .form-inline #but {
                 padding: 10px 20px;
                background-color: blueviolet;
                border: 1px solid #ddd;
                color: white;
                margin: 20px;
                cursor: pointer;
            }

            .form-inline #but:hover {
                background-color: royalblue;
            }

            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }
            div{
                padding: 50px;
                width: 800px;
                height: 400px;
                margin: auto;
                background-color: antiquewhite;

            }
            }
        </style>
    </head>



    <body>
        <div>
            <form class="form-inline" method="post"  >
                <label>Email:</label>
                <input type="text"  placeholder="Enter Name" name="name" value="<?php
        if (isset($_COOKIE["remember"])) {
            echo $_COOKIE["name"];
        }
        ?>" >
                <label>Password:</label>
                <input type="password"  placeholder="Enter password" name="pswd" value="<?php
                if (isset($_COOKIE["remember"])) {
                    echo $_COOKIE["pswd"];
                }
        ?>" >
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <input type="submit" name="send" value="Submit" id="but">
            </form>
        </div>

    </body>
</html>
