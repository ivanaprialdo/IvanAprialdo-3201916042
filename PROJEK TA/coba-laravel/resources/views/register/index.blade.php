@extends('layouts.main')

@section('container')
<section style="height: 82px">

</section>
<div class="row justify-content-center">
    <div class="col-lg-5">
      <div class=" card p-1 shadow" style="width: 115%; margin:2rem auto; border-radius: 20px;">
        <main class="form-registration w-100 m-auto">
          <h1 class="h3 mb-3 fw-Bold text-center">Form Registration</h1>
            <form action="/register" method="post">
            @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                <div class="invalid-feedback">
                @error('name')
                {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                <div class="invalid-feedback">
                    @error('username')
                    {{ $message }}
                    </div>
                    @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" 
                placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                <div class="invalid-feedback">
                    @error('email')
                    {{ $message }}
                    </div>
                    @enderror
              </div>

              <div class="form-floating">
                <input type="password" name ="password" class="form-control rounded-bottom rounded-top @error('password') is-invalid @enderror" id="password" 
                placeholder="Password" required >
                <label for="password">Password</label>
                <div class="invalid-feedback">
                    @error('password')
                    {{ $message }}
                    </div>
                    @enderror
              </div>
        
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
             
            </form>
            <small class="d-block text-center mt-3">Sudah Terdaftar Silahkan <a href="/login">Login </a></small>
          </main>
    </div>
</div>
<hr>

@endsection