<div class="container">
	  	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"> 
	  		<div class="col-md-1 mb-2 mb-md-0"> 
	  			<a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"> 
			  		<img class="mb-4" src="logo-muiv.svg" alt="" width="159" height="65"> 
			  	</a> 
	  		</div> 
	  		<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 headerList"> 
	  		<? if(isset($user)) {?>
		  		<li><a href="/main.php" class="nav-link px-2 link-secondary">Главная</a></li> 
		  		<li><a href="/news.php" class="nav-link px-2 link-secondary">Новости</a></li> 
		  		<li><a href="/states.php" class="nav-link px-2 link-secondary">Статьи и правовой материал</a></li> 
		  		<? if($user['u_role'] == 'admin') { ?>
		  			<li><a href="/addin_state.php" class="nav-link px-2 link-secondary">Добавить статьи</a></li> 
		  			<li><a href="/registration.php" class="nav-link px-2 link-secondary">Добавить пользователя</a></li> 
		  			<li><a href="/lessons.php" class="nav-link px-2 link-secondary">Учебный материал</a></li> 
		  		<? }; ?> 
		  		<? }else {?>
		  		<li><a href="/main.php" class="nav-link px-2 link-secondary">Главная</a></li> 
		  		<li><a href="/news.php" class="nav-link px-2 link-secondary">Новости</a></li> 
		  		<li><a href="/states.php" class="nav-link px-2 link-secondary">Статьи и правовой материал</a></li> 
		  		<? }; ?>
		  	</ul> 

		  		<div class="col-md-1 text-end"> 
		  			 <? if(isset($user)) {?>
		  				 <a href=""  class="mt-3 btn btn-danger d-inline-flex align-items-center rounded collapsed" id="logout">Выйти из аккаунта</a><br>
		  			<? }else {?>
		  				<a href="index.php"  class="mt-3 btn btn-danger d-inline-flex align-items-center rounded collapsed" >Авторизация</a>
		  			<? } ?>
		  	</div> 
	  	</header>
	  </div>
