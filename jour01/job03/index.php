<?php
$hello3= "hello LaPlateforme";
echo $hello3 . "<br>";
//Math
$val0=10;
//histoire
$val1=12;
//sport
$val2=15;

$total= $val0 + $val1 + $val2;
//note total
echo $total;

?>

<h1>tableau</h1>
<table>
  <tr>
    <th>Math</th>
    <th>histoire</th>
    <th>sport</th>
  </tr>
  <tr>
    <td><?php echo $val0 ?></td>
    <td><?php echo $val1 ?></td>
    <td><?php echo $val2 ?></td>
  </tr>
</table>

