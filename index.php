<?
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 m-0 p-0">
              <div class="flex-shrink-0 p-3 bg-dark  " style="height: 100vh;"> 
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
              <img class="mb-4" src="logo-muiv.svg" alt="" width="159" height="65"> 
              <span class="fs-5 fw-semibold "></span> 
            </a> 
             <div class="d-flex justify-center flex-column">
               <button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true"><img width="24" height="24" src="https://img.icons8.com/fluency/48/create.png" alt="create"/> Создание заданий</button> 
               <button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true"><img width="24" height="24" src="https://img.icons8.com/fluency/50/list.png" alt="list"/>Список дисциплин</button> 
               <button class="text-white btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true"><img width="24" height="24" src="https://img.icons8.com/color/48/courses.png" alt="courses"/>Информационное бюро</button> <br><br><br>
               <a href="./auth.php" class="btn btn-danger d-inline-flex align-items-center rounded collapsed"  aria-expanded="true">Авторизация</a> 
             </div>
          </div>
        </div>
        <div class="col-md-10 mt-5 mb-5">
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

          <div class="container">
              <div class="row">
                <h2><img width="48" height="48" src="https://img.icons8.com/color/48/courses.png" alt="courses"/> Правовая информация</h2>
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
      </div>
    </div>

   











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>