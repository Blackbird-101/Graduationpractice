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

$result = $db->query("SELECT * FROM `mv_studyDate`"); // запрос на выборку
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
    <title>Учебный материал</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <? include 'header.php'; ?>
           <div class="container">
               <div class="row">
                <h2><img width="48" height="48" src="https://img.icons8.com/color/48/courses.png" alt="courses"/> Учебные материалы</h2>
                <?php foreach ($data as $row) {?>
                <div class="col-md-3">
                  <div class="card text-bg-danger mb-3 shadow-lg" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><?=($row['sd_name']) ?></h5>
                      <p class="card-text" style=" overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?=($row['sd_desc']) ?></p>
                   <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal-<?=($row['sd_id']) ?>">Просмотр материала</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModal-<?=($row['sd_id']) ?>" tabindex="-1" aria-labelledby="exampleModalLabel-<?=($row['sd_id']) ?>" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-centered"><?=($row['sd_id']) ?>
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=($row['sd_name']) ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <?=($row['sd_desc']) ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                  </div>
                  <? } ?>
              </div>
        </div>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script type="text/javascript">     
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







          
