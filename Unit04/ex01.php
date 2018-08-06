<?php 
    echo "<pre>";
        print_r($_GET);
    echo "<pre>";
    
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="get.php" method="GET">
        Email <input type="text" name="email"><br>
        Pass<input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>