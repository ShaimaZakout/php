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
    <?PHP
     $books = array("book" =>
                array("title" => "Essentials Of PHP", "isbn" => "201401", "copies" => 15, "author" => "Jon", "publisher" => "Adam")
                , "book1" =>
                array("title" => "Essentials Of js", "isbn" => "20125", "copies" => 13, "author" => "Jonan", "publisher" => "Adam")
         , " book2" =>
                array("title" => "data structure ", "isbn" => "2458", "copies" => 20, "author" => "sara", "publisher" => "mona")
            );
     
    ?>
    <body>
        <h1> insert a new book</h1><br>
          <form method="POST">
            title :   <input type="text " name="title"  required placeholder=" Enter the title"> <br><br>
            isbn : <input type="number" name="isbn"  required placeholder=" Enter isbn"> <br><br>
            number of  copies :  <input type="number" name="copies"  required  placeholder=" Enter number of  copies "> <br><br>
            author name :  <input type="text " name="author"  required placeholder=" Enter the author name "> <br><br>
            publisher name :  <input type="text" name="publisher"  required placeholder=" Enter the publisher name"> <br><br>
            <input type="submit" name="send">
          </form>  
             <br><h2>Your books </h2><br>
           <table border="1">
             <?PHP
              if (isset($_POST["send"])) {
                $title = $_POST["title"];
                $isbn = $_POST["isbn"];
                $copies = $_POST["copies"];
                $author = $_POST["author"];
                $publisher = $_POST["publisher"];
                $aboutBook = array("title" => "$title", "isbn" => "$isbn", "copies" => $copies, "author" => "$author", "publisher" => "$publisher");
                array_push($books, $aboutBook);
                 foreach ($books as $key => $value) {
                    static $i = 1;
                    echo "<td colspan='2'  style='text-align: center;font-size: 20px; ;color: red'> book $i</td>";
                    foreach ($value as $key1 => $value1) {
                        echo
                        " <tr> 
                         <td>$key1</td>
                         <td>$value1</td> 
                      </tr>  ";
                    }
                    $i++;
                }
            }
            ?>


        </table>
    </body>
</html>
