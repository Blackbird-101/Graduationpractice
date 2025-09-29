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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Добавление правового материала</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
            <? include 'header.php'; ?>
            <div class="container">
                <h2>Добавление правовой матерал</h2>
                <form action="" method="post" class="reg-form" id="addin_stateForm">
                <div class="row"> 
                  <div class="col-md-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название</label>
                        <input required type="text" name="name_state" class="form-control" id="exampleFormControlInput1" placeholder="Закон 3.62......">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Материал</label>
                        <textarea type="textarea" name="content_text" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea>
                    </div>
                  </div>
                  </div>
                  <input type="submit" class="btn btn-danger" value="Добавить праваую статью" name="log_in" />
                </form>
            </div>
            <br><br>








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="text/javascript">     
      $("#addin_stateForm").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/addin_stateLogic.php',
            type: 'POST',
            dataType: 'json',
            data: $("#addin_stateForm").serialize(),
            success: function (response) {
                $('form[id=addin_stateForm]').trigger('reset');
                console.log(response.responseText);
                alert('Cтатья успешно добавлена !');
            },
            error: function (response) {
                $('form[id=addin_stateForm]').trigger('reset');
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
