@extends('layouts.main')

@section('container')
<section style="height: 82px">

</section>
<div class="row justify-content-center">
    <div class="col-md-4">

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

      @if(session()->has('succes'))
      <div class="alert alert-succes alert-dismissible fade show" role="alert">
        {{ session('succes') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
          <div class=" card p-1 shadow" style="width: 115%; margin:2rem auto; border-radius: 20px;">
          <h1 class="h3 mb-3 fw-Bold text-center">Halaman Login</h1>
            <form  action="/login" method="post">
              @csrf

              {{-- <img class="mb-4" src="gereja.png" alt="" width="72" height="57"> --}}
          
              <div class="form-floating">
                <input type="number" name="phone" class="form-control @error('phone') is-invalid 
                @enderror" id="phone" placeholder="Nomor Whatsapp" autofocus required value="{{ old('phone') }}">
                <label for="phone">Nomor Whatsapp</label>
                @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name ="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

              <a href="{{ route('lupapassword') }}" class="mt-2 w-100 btn btn-primary">Lupa Password</a>
             
            </form>
            </div>
            {{-- <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now! </a></small> --}}
          </main>
    </div>
</div>
<hr>


@endsection