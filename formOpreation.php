<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Handling</title>
    </head>
    <body>
        
        <form action="#" method="POST">
          first  name : <input type="text" name ="fname"><br>
            last  name : <input type="text" name ="Lname"><br>
            Email : <input type="email" name ="email"><br>
            password : <input type="password" name ="pass"><br>
            phone number : <input type="text" name ="phoNum"><br>
                       web site: <input type="" name ="link"><br>
                       femal : <input type="radio" name ="gender">
                       male : <input type="radio" name ="gender"><br>
                       comments : <textarea></textarea><br>
                       image: <input type="file" name ="imag"><br>
                       <input type="submit" value="show" name="show"> 
                       <input type="reset" value="reset" style="margin-left: 3pc">
            
        </form>
        <?php
        function  trimValidate(){
        if(isset($_POST["show"])){  // if($_POST["show"])
           $fName= $_POST["fname"];
           echo "befor the validate :" . $fName."<br>";
           $fName= trim($fName);
            echo "after the validate :" . $fName."<br>";
           echo "////////////////////////////////////////////////////////////////////////////////////////////////////////////";
        }}
          function  tagValidate(){
        if(isset($_POST["show"])){  // if($_POST["show"])
           $fName= $_POST["fname"];
           echo "befor the validate :" . $fName."<br>";
//           $fName= htmlspecialchars($fName);
           $fName= strip_tags($fName);
            echo "after the validate :" . $fName."<br>";
           
        }}
            function slasheValidate(){
        if(isset($_POST["show"])){  // if($_POST["show"])
           $fName= $_POST["fname"];
           echo "befor the validate :" . $fName."<br>";
           $fName= stripcslashes($fName);
            echo "after the validate :" . $fName."<br>";
           echo "////////////////////////////////////////////////////////////////////////////////////////////////////////////";
        }}
trimValidate();
tagValidate();
 slasheValidate();
 // اذا الثلاث ميثود السابقة قمنا بعملها للتحقق من المدلخلات التي يدخلها المستخدم
 // نستطيع الان عملها كلها في ميثود واحدة
 function  check($var){
     trim($var);
     strip_tags($var);
     stripcslashes($var);
     return $var;
     
 }
        ?>
    </body>
</html>
