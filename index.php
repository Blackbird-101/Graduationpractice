<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
 <body class="" style="background: url(https://png.pngtree.com/png-clipart/20230813/original/pngtree-simplistic-design-white-background-with-black-lines-in-an-abstract-pattern-png-image_10312249.png);background-size: cover;">
 	<div class="container auth_container">
 		<form action="" method="POST" class="auth_form" id="authForm">  
 				<img class="mb-4" src="logo-muiv.svg" alt="" width="159" height="65">
				<h1 class="h3 mb-3 fw-normal">Авторизация пользователя</h1> 
				<div class="form-floating"> 
					<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"> 
					<label for="floatingInput">Логин</label> 
				</div> <br>
				<div class="form-floating"> 
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"> 
					<label for="floatingPassword">Пароль</label> 
				</div> <br> 
				<input type="submit" class="btn btn-danger w-100 py-2" value="Войти">
                <a href="main.php"  class="btn btn-danger w-100 py-1 mt-2">Войти как гость</a>
			</form> 

 	</div>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script type="text/javascript">     
      $("#authForm").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/auth.php',
            type: 'POST',
            dataType: 'text',
            data: $("#authForm").serialize(),
            success: function (success) {
                $('form[id=authForm]').trigger('reset');
                console.log(success);
                document.location.href = '/main.php'
            },
            error: function (error) {
                $('form[id=authForm]').trigger('reset');
                console.log(error);
            }
        });
    });
</script>  
  </body>
</html>



