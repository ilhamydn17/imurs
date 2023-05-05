@extends('templates.custom')

@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
          </div>

          <div class="card card-primary">
            <div class="card-header"><h4>Login</h4></div>

            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="username" class="form-control @error('username')
                    is-invalid
                  @enderror " name="username" tabindex="1" autofocus>
                  @error('username')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="password" class="control-label @error('password')
                        is-invalid
                      @enderror">Password</label>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2">
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="simple-footer">
            Copyright &copy; RSAU Abdulrachman Saleh 2023
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection