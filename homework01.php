<?php
$n = 30; 
$sum = 0;
$product = 1;

echo "1부터 $n 까지의 숫자: <br>";

for ($i = 1; $i <= $n; $i++) {
    
    echo $i . " ";
    
    
    $sum += $i;
    
    
    $product *= $i;
}

echo "<br><br>";
echo "<strong>전체 합:</strong> " . $sum . "<br>";
echo "<strong>전체 곱:</strong> " . $product;
?>
