@extends('layouts.main')

@section('container')
    <section style="height: 70px">

    </section>
    <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/p1.jpg" width="100%" height="100%" alt="" srcset="">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Peresmian Gereja GKII Tiberias Sekadau</h1>
                        <p>Peresmian Gereja GKII Tiberias Sekadau kabupaten sekadau</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/p2.jpg" width="100%" height="100%" alt="" srcset="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Pelantikan Jemaat</h1>
                        <p>Pelantikan jemaat di Gereja GKII Tiberias Sekadau kabupaten sekadau</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/p3.jpg" width="100%" height="100%" alt="" srcset="">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Peresmian Gereja GKII Tiberias Sekadau</h1>
                        <p>Peresmian Gereja GKII Tiberias Sekadau kabupaten sekadau</p>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container marketing">
        <hr class="featurette-divider">
        @foreach ($post as $item)
        {{-- {{ $item }} --}}
        <div class="row featurette m-3">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $item->title }}</h2>
                <p class="lead">{{ $item->category->name }}</p>
                {{-- <p style="text-align: justify">{{  strip_tags(\Illuminate\Support\Str::limit($item->body, 500, $end='...'))    }}</p> --}}
                 <p style="text-align: justify">{!!  \Illuminate\Support\Str::limit($item->body, 500, $end='...')    !!}</p>
                 
                 <a href="/posts/{{ $item->slug }}" class="btn btn-primary">Baca Selengkapnya</a>

                {{-- <p>{{ }}</p> --}}
            </div>
            {{-- {{ $item }} --}}
            <div class="col-md-5">
                <img src="{{ 'storage/'.$item->image }}" width="435" height="300" alt="" class="">
            </div>
        </div>
        @endforeach
        {{-- <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Peresmian Gereja GKII Tiberias Sekadau </h2>
                <p class="lead">Peresmian Gereja GKII Tiberias Sekadau Hilir kabupaten sekadau</p>
            </div>
            <div class="col-md-5">
                <img src="/img/p1.jpg" width="435" height="300" alt="" class="">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Peresmian Gereja GKII Tiberias Sekadau </h2>
                <p class="lead">Peresmian Gereja GKII Tiberias Sekadau Hilir kabupaten sekadau</p>
            </div>
            <div class="col-md-5">
                <img src="/img/p2.jpg" width="435" height="300" alt="" class="">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Peresmian Gereja GKII Tiberias Sekadau </h2>
                <p class="lead">Peresmian Gereja GKII Tiberias Sekadau Hilir kabupaten sekadau</p>
            </div>
            <div class="col-md-5">
                <img src="/img/p3.jpg" width="435" height="300" alt="" class="">
            </div>
        </div> --}}

        <hr class="featurette-divider">
    </div>
</main>
@endsection
