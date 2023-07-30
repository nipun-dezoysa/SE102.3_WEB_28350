<?php
$unit = 200;
$bill = 0;
for($i=1;$i<=$unit;$i++){
    if($i<=50) $bill+=3.5;
    if($i<=100 && $i>50) $bill+=4;
    if($i<=150 && $i>100) $bill+=5.2;
    if($i>150) $bill+=6.5;
}
echo $bill;
?>