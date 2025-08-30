<?php
echo"<h4>for loop</h4>";
for ($i=1; $i<=20; $i++){
    echo $i. " ";
}
echo"<h4>while loop</h4>";
$j=1;
while ($j<=20){
    echo $j." ";
    $j++;
}
echo"<h4>do-while loop</h4>";
$k=1;
do{
    echo $k." ";
    $k++;
}while($k<=20);
?>