<?
session_start();
$user = $_SESSION['user_auth'];

$stateID = $_GET['state_id'];

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

$stateUniq = $db->query("SELECT * FROM `mv_stateDate` WHERE `s_id` = $stateID;"); // запрос на выборку
$datastatesUniq = [];
// получаем все строки в цикле по одной и записываем в массив
while($rowstatesUniq = $stateUniq->fetch_assoc())
{
    $datastatesUniq[] = $rowstatesUniq;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
          <? include 'header.php'; ?>
           <div class="container">
           	<?php foreach ($datastatesUniq as $stateUniq) {?>
           	<div class="row">
           		<h1><?=($datastatesUniq[0]['s_name']) ?></h1>
           		<p><? echo  nl2br(htmlspecialchars($datastatesUniq[0]['s_text']))?></p>
           	</div>
           	<? } ?>
            <div class="row">
              <a href="states.php" class="btn btn-danger mt-5 ms-2" style="max-width: 220px;">Вернуться назад ←</a>
            </div>
            <br><br>
          </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script type="text/javascript">
	function search() {
	    let input = document.getElementById("inputSearch");
	    let filter = input.value.toUpperCase();
	    let ul = document.getElementById("list");
	    let li = ul.getElementsByTagName("li");
	    
	    // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
	    for (let i = 0; i < li.length; i++) {
	    let a = li[i].getElementsByTagName("a")[0];
	    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
	    li[i].style.display = "";
	    } else {
	    li[i].style.display = "none";
	    }
	    }
	  };
	  document.addEventListener('keyup', search);
	  function viewdiv(id){
	    var el=document.getElementById(id);
	    if(el.style.display=="block"){
	    el.style.display="none";
	    } else {
	    el.style.display="block";
	    }
	  };    
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
