<!DOCTYPE html>
<html>
<body>

<h2>Homework 3-2: Sorting Random Numbers</h2>

<form method="post">
  개수 입력 (10~100): <input type="number" name="n" min="10" max="100" required>
  <input type="submit" value="생성 및 정렬">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];
    $arr = array(); 

    
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 100); 
    }

   
    echo "<h3>[생성된 원본 결과]</h3>";
    foreach ($arr as $value) {
        echo $value . " ";
    }

   
    sort($arr);

   
    echo "<h3>[오름차순 정렬 결과]</h3>";
    foreach ($arr as $value) {
        echo $value . " ";
    }
    
   
    echo "<br><br><strong>최댓값:</strong> " . max($arr);
}
?>

</body>
</html>