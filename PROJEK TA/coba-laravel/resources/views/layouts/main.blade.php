<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

    {{-- Bootsrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">
    
    <link rel="stylesheet" href="/css/jadwal.css">

    <link rel="stylesheet" href="/css/sejarah.css">

    <link rel="stylesheet" href="/css/kontaks.css">

    <link rel="stylesheet" href="/css/kntkk.css">

    <link rel="stylesheet" href="/css/badanpj.css">

    <link rel="stylesheet" href="/css/bidangpelayan.css">

    <link rel="stylesheet" href="/css/visi.css">

    <link rel="stylesheet" href="/css/lapuang.css">

    <link rel="stylesheet" href="/css/datajemaat.css">



    <title>WEBSITE GEREJA GKII TIBERIAS SEKADAU | {{ $title }}</title>
    
  </head>
  
  <body>
      @include('partials.navbar')
      {{-- <div class="container mt-4"> --}}
       @yield('container')
      {{-- </div> --}}

    @include('partials.footer')
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"></script>

  </body>
</html>