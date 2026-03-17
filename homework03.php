<!DOCTYPE html>
<html>
<body>

<h2>Homework 3-3: Fibonacci Sequence</h2>

<form method="post">
  n 입력 (1~100): <input type="number" name="n" min="1" max="100" required>
  <input type="submit" value="결과 보기">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];
    $f = array();
    
    
    $f[1] = 1;
    $f[2] = 1;

    echo "<h3>실행 결과 (n = $n)</h3>";
    echo "<strong>i &nbsp;&nbsp; fi &nbsp;&nbsp; fi+1 / fi</strong><br>";
    echo "-----------------------------------<br>";

    for ($i = 1; $i <= $n; $i++) {
       
        if ($i > 2) {
            $f[$i] = $f[$i-1] + $f[$i-2];
        }

        
        if ($i == 1) {
            $next_f = 1;
        } else {
           
            $next_f = $f[$i] + $f[$i-1];
        }

        $ratio = $next_f / $f[$i];

        
        echo $i . " &nbsp;&nbsp; " . $f[$i] . " &nbsp;&nbsp; " . number_format($ratio, 6) . "<br>";
    }
}
?>

</body>
</html>