@extends('layouts.main')

@section('container')
    <section style="height: 80px">
    </section>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12"> --}}
                <!-- Page title -->
                        {{-- <div class="card shadow-2-strong card-registration mt-5 mb-4" style="border-radius: 15px;">
                          <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Laporan Keuangan Pemasukan Gereja</h3>
                            <form action="/halamanpendataan" method="POST">
                              @csrf
                
                              <div class="row">
                                <div class="col-md-6 mb-4">
                
                                  <div class="form-outline">
                                    <label class="form-label" for="firstName">Saldo Bulan </label>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="firstName">Kolekte Minggu </label>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="firstName">Persepuluhan Kel. Bp</label>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="firstName">Persepuluhan NN</label>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="firstName">Persembahan Syukur</label>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    --}}
    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container content">
    <div class="row gutters justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="plan-card plan-one">
          <div class="pricing-header">
            <h4 class="plan-title">Laporan Keuangan Pemasukan</h4>
          </div>
          <ul class="plan-features">
            <li>Saldo Bulan           :</li>
            <li>Kolekte Minggu        :</li>
            <li>Persepuluhan Kel. Bp  :</li>
            <li>Persepuluhan NN       :</li>
            <li>Persembahan Syukur    :</li>
          </ul>
        </div>
      </div>
        </div>
      </div>
    </div>
    </div> --}}

    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 
<section class="price_plan_area section_padding_130_80" id="pricing">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-8">
            <!-- Section Heading-->
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Laporan Keuangan Pemasukan</h3>
              <p>Gereja Kemah Injil Indonesia Tiberias Sekadau</p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- Single Price Plan Area-->
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-12 col-lg-12">
            <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Side Shape-->
              <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
              <div class="description">
                <p>Saldo Bulan {{$saldo->bulan}} : Rp. {{ $saldo->nominal}}</p>
                <p>Kolekte Minggu {{$kolekte->tanggal}} : Rp. {{ $kolekte->nominal }}</p>
                <p>Persepuluhan Minggu {{ $persepuluhan->tanggal}} : Rp. {{ $persepuluhan->nominal }} </p>     
              </div>
          </div>
          <!-- Single Price Plan Area-->
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection
