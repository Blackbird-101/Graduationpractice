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
        <div class="col-md-6">
		         <h1>Правовое обеспечение студентов</h1>
		         <p>Правовое обеспечение студентов в России закреплено в Федеральном законе «Об образовании в Российской Федерации" (№ 273-ФЗ), который гарантирует права на общедоступное и бесплатное образование, социальную поддержку, защиту интересов. Студентам предоставляются меры социальной поддержки, включая стипендии, материальную помощь, а также право на общежитие и образовательные кредиты. Защита прав студентов осуществляется через обращения в администрацию вуза, Рособрнадзор, а также через внутренние локальные нормативные акты университета. </p><br>
		    </div>
		    <div class="col-md-6">
		         <img style="width:100%;height:90%;border-radius: 6px;" src="https://perm.hse.ru/data/2023/10/10/2047157262/vspy-04.jpg">
		    </div>
		  </div>
		  <div class="row">
        <div class="col-md-6">
        		<img style="width:100%;height:90%;border-radius: 6px;" src="https://pr.udsu.ru/cache/Image/7585@bigbox-007585-%D0%A1%D1%82%D1%83%D0%B4%D0%B5%D0%BD%D1%82%D1%8B,%20%D0%BE%D0%B1%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B8%D0%B5%D1%81%D1%8F%20%D0%BF%D0%BE%20%D0%BD%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E%20%C2%AB%D0%9F%D1%80%D0%B0%D0%B2%D0%BE%D0%B2%D0%BE%D0%B5%20%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%BD%D0%B0%D1%86%D0%B8%D0%BE%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9.jpg">
		    </div>
		    <div class="col-md-6">
		    		<h2>Меры социальной поддержки </h2>
						<ul >
						  <li>Полное государственное обеспечение (одежда, обувь, инвентарь).</li>
						  <li>Обеспечение питанием.</li>
						  <li>Предоставление мест в общежитиях.</li>
						  <li>Получение стипендий, материальной помощи и других денежных выплат.</li>
						  <li>Получение образовательного кредита.</li>
						  <li>Защита прав студентов </li>
						  <li>Обращение в администрацию вуза: Студент может обратиться к декану или ректору по вопросам нарушения его прав.</li>
						  <li>Рособрнадзор: Федеральная служба по надзору в сфере образования и науки может рассматривать факты нарушения прав студента конкретным учебным заведением.</li>
						  <li>Иные органы: Правовая защита может быть обеспечена через другие государственные органы и адвоката.</li>
						</ul> 
		    </div>
		  </div>
		  <div class="row">
        <div class="col-md-6 mt-5 mb-5">
        	<h2>Права студентов</h2>
						<ul >
						  <li>Образовательные права: Право на получение образования в соответствии с федеральными государственными образовательными стандартами, на обучение в пределах этих стандартов по индивидуальным учебным планам, на бесплатное пользование библиотечно-информационными ресурсами. </li>
						  <li>Социальная поддержка: Право на получение стипендий, материальной помощи и других денежных выплат. 
						Жилищные права: Право на обеспечение местами в общежитиях. </li>
						  <li>Транспортные права: Право на транспортное обеспечение в соответствии с законодательством. </li>
						  <li>Информационные права: Право на свободное выражение мнений и убеждений, право на доступ к информационным ресурсам вуза. </li>
						  <li>Право на защиту: Право на защиту своих интересов и прав в случае их нарушения или конфликта с университетом. </li>
						</ul>
		    </div>
		    <div class="col-md-6 mt-5 mb-5">
		    	<img style="width:100%;height:90%;border-radius: 6px;" src="https://api.vshp.online/system/post/964/cover_beautiful-young-woman-smiling.jpg">
		    </div>
		  </div>  
		  <div class="row">
		  	<h2>Основные законодательные акты</h2>
						<p>Федеральный закон "Об образовании в Российской Федерации" (№ 273-ФЗ): Этот закон устанавливает основные права и обязанности обучающихся, а также государственные гарантии права на образование. 
						Устав высшего учебного заведения: Каждый вуз имеет собственный устав, который также регулирует права и обязанности студентов, включая правила внутреннего распорядка и правила проживания в общежитиях. 
		  </div>
		</div>
			 </div>
			  </div>
        </div>
      </div>
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
