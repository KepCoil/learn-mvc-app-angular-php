
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="vieport" content="width=device-width, initial-scale=1">
	<title><?php echo $pageData['title']; ?></title>
	
	<!-- css -->
	<link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">

</head>
<body>

	<header></header>

	<main id="content">

		<div class="container table-block">
			<div class="row table-block__cell">
				<div class="col-sm-6 col-md-4 col-md-offset-4">

					<h1 class="text-center login-title">Вход в кабинет</h1>

					<div class="account-wall">
						<img id="js-profile-img" class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
						alt="">

						<form id="js-sign-form" class="form-signin sign-form" method="post">

							<?php if(!empty($pageData['error'])) :?>
								<p><?php echo $pageData['error']; ?></p>
							<?php endif; ?>

							<input type="text" name="login" id="login" class="form-control sign-form__login" placeholder="Логин" required>
							<input type="password" name="password" id="password" class="form-control sign-form__password" placeholder="Пароль" required>
							<button class="btn btn-lg btn-primary btn-block" type="submit">
							Войти</button>
						</form>

					</div>
					
				</div>
			</div>
		</div>

	</main>

	<footer></footer>


	


	<script src="../libs/jquery/jquery.min.js"></script>
	<script src="../libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../libs/angular-js/angular.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>