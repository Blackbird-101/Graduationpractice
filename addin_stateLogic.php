<?php
  // Подключение к базе данных
  $conn = mysqli_connect('localhost', 'f1160035_moscow_vitte', 'HlDea4ki', 'f1160035_moscow_vitte');

  // Получение данных формы регистрации
  $name_state = $_POST['name_state'];
  $text = $_POST['content_text'];
  $register_query = "INSERT INTO mv_stateDate (s_name,s_text) VALUES ('$name_state', '$text')";
    mysqli_query($conn, $register_query);
   
    echo "Статья добавлена!";
  
?>
