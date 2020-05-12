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

        class book {

            public $price;
            public $title;

            function setPrice($price) {
                $this->price = $price;
            }

            function setTitile($title) {
                $this->title = $title;
            }

            function getTitile() {
                echo $this->title . "<br>";
            }

            function getPrice() {
                echo $this->price . "<br>";
            }

        }

        $book = new book();
        $book->setPrice(1000);
        $book->getPrice();
        echo '<br>**********************************************************************<br>';

        class A {

            public $a = 2;

        }

        $a = new A;     // من هذه الفكرة بدنا نفهم انه كلا الاثنين باشروا على نفس المكان
        $b = $a;
        $b->a *= 5;
        echo $a->a;
        echo '<br>**********************************************************************<br>';

        class B {

            public $text = "value :)";

            function printText() {
                echo $this->text;
            }

        }

        $instance = "B";
        $inst = new $instance();   // الفكرة هنا اننا نستطيع عمل اسم الكلاس في متغير ووضعه عند تعريف الاوبجكت
        echo $inst->printText();
        echo $inst->text;
        $obj = new B();
        echo $obj->printText();
        echo $obj->text;
        echo '<br>**********************************************************************<br>';

        /**
         * في هذا المثال اننا نستطيع تسمية الميثود والاتربيوت بنفس الاسم
         */
        class C {

            public $text = "value :)";

            function text() {
                echo $this->text . " \t methode";
            }

        }

        $c = new C;
        echo $c->text(), " ", PHP_EOL, $c->text;
        echo '<br>**********************************************************************<br>';

        class person {

            public $bb = 20;

            const pi = 3.14;

            public function __construct($x) {
                echo 'vakue of x is : ' . $x;
            }

        }

        class stu extends person {

            public $stuID = 120155;

            public function __construct() {
                parent::__construct(10);
                echo "hello worid  \t   <br>";
            }

        }

        class emp extends person {
            function __construct() {
                 
            }

            public $empID;

        }

        $obj1 = new person(10);
        $obj2 = new stu();
         $b=new emp();
         echo var_dump($b);
        echo '<br>**********************************************************************<br>';

//        class books {
//
//            var $price;
//            var $titel;
//
//            function setPrice($price) {
//                $this->price = $price;
//            }
//
//            function setTitel($titel) {
//                $this->titel = $titel;
//            }
//
//            function getPrice() {
//                echo $this->price . "<br>";
//            }
//
//            function getTitel() {
//                echo $this->titel . "<br>";
//            }
//
//        }
//
//        $bookOb = new books();
//        $bookOb->setPrice(10);
//        $bookOb->setTitel("math");
//        $bookOb->getPrice();
//        $bookOb->getTitel();
//        echo '<br>**********************************************************************<br>';
//
//        class per {
//
//            var $fname = "shaimaa";
//            var $lname = "zakout";
//
//            function __construct($lastName, $fName) {
//                $this->fname = $fName;
//                $this->lname = $lastName;
//                echo $this->fname ."<br>" .$this->lname ."<br>";
//             }
//
//        }
//
//        $perObj = new per("ola","zakout");
         
        echo '<br>**********************************************************************<br>';
        
        
        ?>
    </body>
</html>
