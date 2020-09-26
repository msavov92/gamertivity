@include('layouts.header')

<section id="login_form">
    <div class="container">
      <h1 class="text-center">Добре дошли в света на игрите!</h1>
      <div class="row">
        <div class="col-md-12">
          <div class="gamer_connect">
            @if(\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p class="">{{ \Session::get('success') }}</p>
            </div>

            @endif
            @if(\Session::has('failed'))
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p class="">{{ \Session::get('failed') }}</p>
            </div>

            @endif
            <form action="{{route('auth.login.authorize')}}" method="POST" id="login_panel">
                @csrf
              <h3 class="text-center">Влизане</h3>
              <div class="login_icon">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input type="text" value="{{old('email')}}" name="email" placeholder="Имейл">
                @error('email') <span class="text-danger">{{$message}} @enderror
              </div>
              <div class="login_icon">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password"/>
                @error('password') <span class="text-danger">{{$message}} @enderror
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
              <a href="{{route('auth.register')}}">Регистрация</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('layouts.footer')