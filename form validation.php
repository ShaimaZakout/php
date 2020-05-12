<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>shaimaa zakout :) </title>

        <style>
            /* هنا ستايل خفيف لذيذ ب سي اس اس*/
            body {font-family: Arial, Helvetica, sans-serif;
                  background-color: #ddd

            }
            * {box-sizing: border-box;}
            .error {color: #FF0000;}
            .correct{color: green;
                     font-family: fantasy;
                     font-size: 30px;}
            .form-inline {  
                display: flex;
                flex-flow: row wrap;
                align-items: center;
            }

            .form-inline label {
                margin: 5px 10px 5px 0;
            }

            .form-inline input {
                vertical-align: middle;
                margin: 5px 10px 5px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
            }

            .form-inline button {
                padding: 10px 20px;
                background-color: blueviolet;
                border: 1px solid #ddd;
                color: white;
                cursor: pointer;
                margin: 10px;
            }

            .form-inline button:hover {
                background-color: royalblue;
            }



            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }

            div{
                padding: 30px;
                width: 800px;
                height: 600px;
                margin: auto;
                background-color: antiquewhite;

            }
            h1{
                text-align: center;
            }
            }

        </style>
    </head>
    <body>


        <?php

        // هذه الميثود تتأكد من ان المدخل خالي من الفراغات ومن السلاش ومن اي تاغ بلغة الاتش تي ام ال
        function check($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }

        // هذه المتغيرات لوضع المدخل الذي يدخله المستخدم والاخرى لتخزين رسالة الخطأ إن وجد
        $name = $email = $password = " ";
        $nameErr = $emailErr = $passwordErr = " ";
        $correct = " ";
        if (isset($_POST["send"])) {    // هنا نتحقق من أن المستخدم قد ضغط زر الادخال فعلا أم لا
            // هنا للفحص الاسم إن كان مكان الادخال ليس فارغا أعمل التالي 
            if (!empty($_POST["name"])) {
                $name = check($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {  // تأكد من خلو الاسم من هذه الرموز
                    $nameErr = "Name	Should only contain letters, numbers"; //إن كانت موجودة نطبع رسالة بالخطأ
                }
            } else {
                $nameErr = "You Forgot to Enter Your  Name ";  // هنا ان لم يدخل الاسم نذكره بإدخاله برسالة خطأ
            }

            // هنا للتحقق من الايميل كالتالي
            if (!empty($_POST["email"])) {  //إن أدخل فعلا إيميل قم بالفحص
                $email = check($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // هذه الميثود جاهزة تتأكد إن كان الايميل بالصيغة الصحيحة أم لا
                    $emailErr = "Email Should be a valid email ";   // إن خطأ يطبع هذه الرسالة
                }
            } else {
                $emailErr = "You Forgot to Enter Your  Email";  // هنا إن لم يدخل إيميل نطالبه بإدخاله من خلال رسالة التحذير
            }
            // هنا لفحص كلمة المرور وهي كاالتالي
            if (!empty($_POST["pswd"])) {    //نتأكد أنه فعلا ادخل كلمة قبل الفحص
                $password = check($_POST["pswd"]);
                if (strlen($password) <= '8') {    // نتأكد من كون كلمة المرور اكبر من 8 
                    $passwordErr = "  Password Must Contain At Least 8 Characters";
                } elseif (!preg_match("#[0-9]+#", $password)) {    // هذه الحالة تتأكد من كون كلمة المرور تحتوي على ارقام
                    $passwordErr = "  Password Must Contain At Least 1 Number";
                } elseif (!preg_match("#[A-Z]+#", $password)) { //هنا للفحص هل تحتوي على حروف كبيرة ام لا
                    $passwordErr = "  Password Must Contain At Least 1 Capital Letter";
                } elseif (!preg_match("#[a-z]+#", $password)) {  //للفحص هل تحتوي على حروف صغيرة ام لا
                    $passwordErr = "  Password Must Contain At Least 1 Lowercase Letter ";
                }
            } else {   // في حالة لم يدخل كلمة مرور
                $passwordErr = "You Forgot to Enter Your Password ";
            }
            // هنا في حالة متغيرات الاخطا فارغة اي انه لم يحدث خطأ في الادخال سيطبع للمستخد رسالة بان الادخال صحيح مع ابتسامة حلوة:)
            if ($passwordErr === " " && $nameErr === " " && $emailErr === " ") {
                $correct = " is true :) ";
              }
        }
        ?>
        <!--هنا مكان الادخال مع طباعة نجمة حمراء دليل على انه مطلوب وطباعة رسالة الخطا ان حدث-->
        <h1>PHP Form Validation :) </h1>
        <div>
            <h3><span class="error">* required field</span></h3>
            <form class="form-inline"  method="post">
                <label>Name:</label>
                <input type="text" id="name" placeholder="Enter name" name="name" >  
                <span class="error">* <?php echo $nameErr; ?></span><br>

                <label>Email:</label>
                <input type="email" id="email" placeholder="Enter email" name="email"  >
                <span class="error">* <?php echo $emailErr; ?></span><br>

                <label>Password:</label>
                <input type="password" id="pwd" placeholder="Enter password" name="pswd" >
                <span class="error">* <?php echo $passwordErr; ?></span><br>
                <span class="correct"> <?php echo $correct; ?></span>
                <button type="submit" name="send">Submit</button>
            </form></div>

    </body>
</html>
