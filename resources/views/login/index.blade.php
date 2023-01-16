@extends('layout.main')

@section('container')

<main class="form-signin">
    <div class="row justify-content-center" style="margin-top: 180px">
        <div class="col-lg-4 align-center">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf
                <div class="form-floating">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ @old('email') }}">
                  <label for="floatingInput">Email address</label>
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              </form>
              <small class="d-block text-center mt-3">Not Registred? <a href="/register">Register Now!</a></small>
        </div>
    </div>
  </main>  

@endsection