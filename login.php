<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sergey Yeremin a.k.a. RuDigitalPhoenix">
    <link rel="icon" href="favicon.ico">

    <title>Design In-Time DEMO CMS v0.1.1a login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom-styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h4 class="form-signin-heading">Пожалуйста, авторизуйтесь для доступа к списку товаров!</h4>
		<p>&nbsp;</p>
        <label for="inputEmail" class="sr-only">Имя пользователя:</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Имя пользователя" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль:</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>