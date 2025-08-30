<?php
$arr= array();
for($i=0;$i<10;$i++){
    $arr[$i]=($i+1)*10;
}
echo "Array element using foreach loop:<br>";
foreach($arr as $Value){
    echo $Value . " ";
}
?>