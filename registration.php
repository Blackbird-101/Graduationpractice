<?
session_start();
$user = $_SESSION['user_auth'];

$db_host = "localhost"; // сервер
$db_user = "f1160035_moscow_vitte"; // имя пользователя
$db_pass = "HlDea4ki"; // пароль
$db_name = "f1160035_moscow_vitte"; // название базы данных

// выполнение подключения
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);
// проверка на успешное подключение и вывод ошибки, если оно не выполнено
if ($db->connect_error) {
  echo "Нет подключения к БД. Ошибка:".mysqli_connect_error();
  exit;
} ;

$result = $db->query("SELECT * FROM `mv_users`"); // запрос на выборку
$data = [];
// получаем все строки в цикле по одной и записываем в массив
while($row = $result->fetch_assoc())
{
    $data[] = $row;
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация пользователя</title>
     <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
 <? include 'header.php'; ?>
            <div class="container">
                <h2>Добавление пользователя</h2>
                <form action="" method="post" class="reg-form" id="regForm">
                <div class="row"> 
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Почта</label>
                        <input required type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input required type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Иван">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Фамилия</label>
                        <input required type="text" name="surname" class="form-control" id="exampleFormControlInput1" placeholder="Иванов">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Роль</label>
                        <select type="text" name="role" class="form-control" id="exampleFormControlInput1" placeholder="">
                          <option>Администратор</option>
                          <option>Студент</option>
                          <option>Учитель</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input required type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                  </div>
                  </div>
                  <input type="submit" id="regbtn" class="btn btn-danger rebbtn" value="Добавить пользователя" name="log_in" />
                </form>
            </div><br><Br>
            <div class="container">
              <h2>Список пользователей</h2>
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Фамилия</th>
                      <th scope="col">Почта</th>
                      <th scope="col">Роль</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $row) {?>
                    <tr>
                      <td scope="row"><?=($row['u_id']) ?></td>
                      <td><?=($row['u_name']) ?></td>
                      <td><?=($row['u_surname']) ?></td>
                      <td>@<?=($row['u_email']) ?></td>
                      <td>@<?=($row['u_role']) ?></td>
                    </tr>
                    <? } ?>
                  </tbody>
                </table>
            </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="text/javascript">     
      $("#regForm").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/register.php',
            type: 'POST',
            dataType: 'JSON',
            data: $("#regForm").serialize(),
            success: function (response) {
                $('form[id=regForm]').trigger('reset');
                console.log(response.responseText);
                alert('Пользователь успешно добавлен !');
            },
            error: function (response) {
                $('form[id=regForm]').trigger('reset');
                console.log(response.responseText);
            }
        });
    });
     $("#logout").click(function (event) {
        $.ajax({
            url: '/logout.php',
            success: function () {
                document.location.href = '/index.php'
            },
        });
    });
</script>  

  </body>
</html>
