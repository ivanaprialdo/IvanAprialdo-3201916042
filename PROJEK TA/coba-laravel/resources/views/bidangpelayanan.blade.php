@extends('layouts.main')

@section('container')
<section style="height: 0px">
</section>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="section services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Bidang Pelayanan</h2>
                    <p>Bidang Pelayanan Gereja Kemah Injil Indonesia Tiberias Sekadau</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="fa-user-circle-o">
                        <h5>Pelayanan Anak</h5>
                        <p>Ketua : {{$pelayanananak->ketua}}</p>
                        <p>Sekretaris   : {{$pelayanananak->sekretaris}}</p>
                        <p>Bendahara    : {{$pelayanananak->bendehara}}</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Pelayanan Remaja</h5>
                        <p>Ketua        :  {{$pelayananremaja->ketua}}</p>
                        <p>Sekretaris   : {{$pelayananremaja->sekretaris}}</p>
                        <p>Bendahara    : {{$pelayananremaja->bendehara}}</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Pelayanan Pemuda</h5>
                        <p>Ketua        :  {{$pelayananpemuda->ketua}}</p>
                        <p>Sekretaris   : {{$pelayananpemuda->sekretaris}}</p>
                        <p>Bendahara    : {{$pelayananpemuda->bendehara}}</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Pelayanan Perkaria</h5>
                        <p>Ketua        :  {{$pelayananperkaria->ketua}}</p>
                        <p>Sekretaris   : {{$pelayananperkaria->sekretaris}}</p>
                        <p>Bendahara    : {{$pelayananperkaria->bendehara}}</p>
                    </div>
                </div>
            </div>
            <!-- / -->
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Pelayanan Perkauan</h5>
                        <p>Ketua        :  {{$pelayananperkauan->ketua}}</p>
                        <p>Sekretaris   : {{$pelayananperkauan->sekretaris}}</p>
                        <p>Bendahara    : {{$pelayananperkauan->bendehara}}</p>
                    </div>
                </div>
            </div>
            <!-- / -->
        </div>
    </div>
</section>
@endsection
