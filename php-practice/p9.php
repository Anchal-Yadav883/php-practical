<?php
    $base = 5;    
    $exp  = 3;     

    // Method 1: using pow() function
    $result1 = pow($base, $exp);

    // Method 2: using ** operator (PHP 5.6+)
    $result2 = $base ** $exp;

    echo "<h2>Exponent using pow(): $base ^ $exp = $result1</h2>";
    echo "<h2>Exponent using ** operator: $base ^ $exp = $result2</h2>";
?>

