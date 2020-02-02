<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamertivity</title>
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

  	<section id="login">
  		 <div class="f_nav">
            <div class="container">
                <div class="f_nav_before">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <a href="#">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  	</section>
  	<section id="login_form">
  		<div class="container">
  			<h1 class="text-center">Добре дошли в света на игрите!</h1>
  			<div class="row">
  				<div class="col-md-12">
  					<div class="gamer_connect">
	  					<form action="{{route('create.register')}}" method="POST">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
	  						<h3 class="text-center">Влизане</h3>
	  						<div class="login_icon">
	  							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
	  							<input type="text" name="login_name_or_email" placeholder="Потребителско име или Имейл">
	  						</div>
	  						<input type="submit" name="login_btn" value="Продължи">
	  						<p>или</p>
	  						<div class="google_login">
	  							<a href="#">Влизане с Google</a>
	  						</div>
	  						<div class="facebook_login">
	  							<a href="#">Влизане с Facebook</a>
	  						</div>
	  					</form>
						<div class="register">
							<h3 class="text-center">Нов сте в Gamertivity?</h3>
							<a href="#">Регистрация</a>
						</div>
					</div>
  				</div>
  			</div>
  		</div>
  	</section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio laboriosam earum voluptatum nihil, accusamus eveniet voluptate dolores autem nemo officiis sint molestiae ex in delectus veniam. Explicabo necessitatibus porro nam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, aut vero pariatur sint tempore officiis cumque nobis veniam inventore consequuntur ducimus harum reiciendis et, ratione minima sed animi, sit quae!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="f_item">
                        <h2>accusantium</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio in doloribus error, quibusdam molestiae. Placeat inventore veniam, eligendi, alias maxime dolore fugit amet numquam possimus id nobis molestias doloremque, aliquam!</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


   	 <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>