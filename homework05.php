<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; width: 300px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        .sun { color: red; }   
        .sat { color: blue; }   
    </style>
</head>
<body>

<h2>달력 생성기</h2>

<form method="post">
    연도(YYYY): <input type="number" name="year" value="<?php echo date('Y'); ?>" min="1" required>
    월(MM): <input type="number" name="month" value="<?php echo date('n'); ?>" min="1" max="12" required>
    <input type="submit" value="달력 보기">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    $month = $_POST['month'];

  
    $start_date = mktime(0, 0, 0, $month, 1, $year);
    $start_day = date('w', $start_date);

    
    $total_days = date('t', $start_date);

    echo "<h3>{$year}년 {$month}월</h3>";
    echo "<table>";
    echo "<tr><th class='sun'>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th class='sat'>토</th></tr>";

    echo "<tr>";

   
    for ($i = 0; $i < $start_day; $i++) {
        echo "<td></td>";
    }

    
    for ($day = 1; $day <= $total_days; $day++) {
        
        $current_day_of_week = ($start_day + $day - 1) % 7;
        
        $class = "";
        if ($current_day_of_week == 0) $class = "class='sun'";
        if ($current_day_of_week == 6) $class = "class='sat'";

        echo "<td $class>$day</td>";

        
        if ($current_day_of_week == 6) {
            echo "</tr><tr>";
        }
    }

   
    while (($start_day + $total_days) % 7 != 0) {
        echo "<td></td>";
        $total_days++;
    }

    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>
