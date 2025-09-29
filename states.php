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

$result = $db->query("SELECT * FROM `mv_stateDate`"); // запрос на выборку
$data = [];
// получаем все строки в цикле по одной и записываем в массив
while($row = $result->fetch_assoc())
{
    $data[] = $row;
}


$states = $db->query("SELECT * FROM `mv_news`"); // запрос на выборку
$datastates = [];
// получаем все строки в цикле по одной и записываем в массив
while($rowstates = $states->fetch_assoc())
{
    $datastates[] = $rowstates;
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
			 	<div class="row">
			 		<h1>Правовые статьи </h1><br><br>
			 		<input type="text" id="inputSearch" placeholder="Поиск.." title="Type in a category" class="form-control" >
			 		<ul class="statesList" id="list">
			 			<div class="row">
			 			<?php foreach ($data as $row) {?>
			 			<div class="col-md-6">
					 			<li><a href="state.php?state_id=<?=($row['s_id']) ?>" class="listPointStates"><?=($row['s_name']) ?></a></li>
			 			</div>
			 			<? } ?>
			 			</div>
			 		</ul>

			 	</div>
			 	<div class="row">
			 		<h1 class="mb-5">Полезные источники</h1>
			 		<div class="col-md-6">
			 			<a href="https://www.consultant.ru/"><img style="width:100%;height:100%;" src="https://www.consultant.ru/static/document/dist/images/a6a95886a428ea448032310fec7f2d54.png"></a>
			 		</div>
			 		<div class="col-md-6">
			 			<a href="https://www.garant.ru/                      "><img style="width:100%;height:100%;" src="https://www.garant.ru/images/m/images/logo-1.png"></a>
			 		</div>
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






