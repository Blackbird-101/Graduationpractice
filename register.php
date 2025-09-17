<?php
  // Подключение к базе данных
  $conn = mysqli_connect('localhost', 'f1160035_moscow_vitte', 'HlDea4ki', 'f1160035_moscow_vitte');

  // Получение данных формы регистрации
  $username = $_POST['username'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($_POST['role'] == "Администратор") {
    $role ='admin';
  }
  if ($_POST['role'] == "Студент") {
    $role = 'student';
  }
  if ($_POST['role'] == "Учитель") {
    $role ='lector';
  }

  // Проверка, существует ли пользователь с таким же именем или email
  $check_user_query = "SELECT * FROM mv_users WHERE u_name='$username' OR u_email='$email'";
  $check_user_result = mysqli_query($conn, $check_user_query);

  if (mysqli_num_rows($check_user_result) > 0) {
    echo "Пользователь с таким именем или email уже существует.";
  } else {
    // Хэширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   
    // Вставка данных пользователя в базу данных
    $register_query = "INSERT INTO mv_users (u_name, u_email, u_password, u_role, u_surname) VALUES ('$username', '$email', '$hashed_password', '$role', '$surname')";
    mysqli_query($conn, $register_query);
   
    echo "Регистрация успешна!";
  }
?>