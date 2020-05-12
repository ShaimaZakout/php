<?php
//  المرور على ثلاث مصفوفات وطباعة محتوياتهم داخل جدول
 
$name =array("shaimaa","Alaa","sara","hamad","Aya");
$department = array("it","eng","se","it","cs");
$avreg=array(90 ,93 ,95 ,85 ,70);
 echo
  "<table border ='1'>
  <tr>
   <td> Name</td>
  
 ";
  foreach ($name as $value) {
      echo " <td>$value</td>";
  }
  echo " </tr>";
  echo "<tr>
  <td> department</td>
  ";
  foreach ($department as $value) {
    echo " <td>$value</td>";
}
echo " </tr>";
echo " <tr>
<td>avreg</td>";
foreach ($avreg as $value) {
    echo "<td>$value</td>";
}
echo " </tr>";
echo " </table>";
 
  
 












 

