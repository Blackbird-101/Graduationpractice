
<?php
  // Проверка, авторизован ли пользователь
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Личный кабинет</title>
</head>
<body>
  <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>

  <a href="logout.php">Выход</a>
</body>
</html>