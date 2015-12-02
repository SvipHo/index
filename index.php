<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="session.php" method="post">
        <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>">
        <input type="text" name="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>