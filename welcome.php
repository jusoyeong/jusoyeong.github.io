<html>
<head><meta charset="utf-8"></head>
<body>
삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다. 
 <br> 
밑변 <?php echo $_GET["width"]; ?><br>
높이 <?php echo $_GET["height"]; ?><br>
면적 <?php echo $_GET["width"]*$_GET["height"]/2; ?><br>
</body>
</html>
<html><body>
직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다.<br>
가로: <?php echo $_GET["width"]; ?><br>
세로: <?php echo $_GET["height"]; ?><br>
면적: <?php echo $_GET["width"] * $_GET["height"]; ?>
</body></html>
<html><body>
원 : 반지름을 입력으로 받아서 면적을 출력한다.<br>
반지름: <?php echo $_GET["radius"]; ?><br>
면적: <?php echo 3.14 * $_GET["radius"] * $_GET["radius"]; ?>
</body></html>
<html><body>
직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다.<br>
가로: <?php echo $_GET["width"]; ?><br>
세로: <?php echo $_GET["length"]; ?><br>
높이: <?php echo $_GET["height"]; ?><br>
체적: <?php echo $_GET["width"] * $_GET["length"] * $_GET["height"]; ?>
</body></html>
<html><body>
원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다.<br>
반지름: <?php echo $_GET["radius"]; ?><br>
높이: <?php echo $_GET["height"]; ?><br>
체적: <?php echo 3.14 * $_GET["radius"] * $_GET["radius"] * $_GET["height"]; ?>
</body></html>
<html><body>
구 : 반지름을 입력으로 받아서 체적을 출력한다.<br>
반지름: <?php echo $_GETT["radius"]; ?><br>
체적: <?php echo (4/3) * 3.14 * $_GET["radius"] * $_GET["radius"] * $_GET["radius"]; ?>
</body></html>
