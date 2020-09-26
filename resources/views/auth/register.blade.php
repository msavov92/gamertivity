@include('layouts.header')

<section id="login_form">
    <div class="container">
      <h1 class="text-center">Добре дошли в света на игрите!</h1>
      <div class="row">
        <div class="col-md-12">
          <div class="gamer_connect">
             <form action="{{route('auth.register.store')}}" method="POST" id="register_panel">
                @csrf
              <h3 class="text-center">Регистрация</h3>
                <input type="text" value="{{old('name')}}" name="name" placeholder="Име"><br />
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                <input type="text"value="{{old('lastname')}}" name="lastname" placeholder="Фамилия"><br />
                @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                <input type="text" value="{{old('username')}}" name="username" placeholder="Потребителско име"><br />
                @error('username') <span class="text-danger">{{$message}}</span> @enderror
                <input type="email" value="{{old('email')}}" name="email" placeholder="Е-поща"><br />
                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                <input type="password" name="password" placeholder="Парола"><br />
                @error('password') <span class="text-danger">{{$message}}</span> @enderror
                <input type="password" name="re_password" placeholder="Повтори парола"><br />
                @error('re_password') <span class="text-danger">{{$message}}</span> @enderror
                <input type="submit" name="register" value="Регистрация">
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

@include('layouts.footer')