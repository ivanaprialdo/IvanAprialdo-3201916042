@extends('layouts.main')

<div class="container mt-4">
@section('container')
<section style="height: 30px">
</section>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <section id="news" class="white-bg padding-top-bottom">
        <div class="container bootstrap snippets bootdey">
            <div class="timeline">
                <div class="date-title">
                    <span>Jadwal Kebaktian GKII Tiberias Sekadau</span>
                </div>

                @foreach ($iremaja as $a)
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $a -> hari ->format('d') }}</p>
                                <small>{{ $a -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Remaja</h2>
                            <span class="widget-49-meeting-time"><h6> Pukul {{date('H:i',strtotime($a -> jam) ) }} WIB</h6> </span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $a -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $a -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $a -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $a -> tempat }}</span></li>
                            
                            <div class="news-media">
                                
                            </div>

                        </div>
                    </div>
                @endforeach

                @foreach ($iperkaria as $b)
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $b -> hari ->format('d') }}</p>
                                <small>{{ $b -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Perkaria</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($b -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $b -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $b -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $b -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $b -> tempat }}</span></li>
                            <div class="news-media gallery">

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($ikeluarga as $c)
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $c -> hari ->format('d') }}</p>
                                <small>{{ $c -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Keluarga</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($c -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $c -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $c -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $c -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $c -> tempat }}</span></li>
                            <li class="widget-49-meeting-item"><span>Alamat : {{ $c -> alamat }}</span></li>
                            <div class="news-media video">
                              
                            </div>
                          
                        </div>
                    </div>
                    @endforeach

                    @foreach ($ipersedoapemuda as $d)
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $d -> hari ->format('d') }}</p>
                                <small>{{ $d -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Persekutuan Doa Pemuda</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($d -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $d -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $d -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $d -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $d -> tempat }}</span></li>
                            <li class="widget-49-meeting-item"><span>Alamat : {{ $d -> alamat }}</span></li>

                            <div class="news-media gallery">
                            
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($iperkauan as $e)
                <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $e -> hari ->format('d') }}</p>
                                <small>{{ $e -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Perkauan</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($e -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $e -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $e -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $e -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $e -> tempat }}</span></li>
                            <div class="news-media video">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($ipemuda as $f)
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $f -> hari ->format('d') }}</p>
                                <small>{{ $f -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Pemuda</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($f -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $f -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $f -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $f -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $f -> tempat }}</span></li>
                            <div class="news-media gallery">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($iminggu as $g)
                    <div class="row">
                    <div class="col-sm-6 news-item">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $g -> hari ->format('d') }}</p>
                                <small>{{ $g -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Minggu Raya</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($g -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $g -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Singer : {{ $g -> singer }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $g -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pengkhotbah : {{ $g -> pkhotbah }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pendoa Syafaat : {{ $g -> pendoa }}</span></li>
                            <li class="widget-49-meeting-item"><span>Petugas Kolekte : {{ $g -> ptgskolekte }}</span></li>
                            <li class="widget-49-meeting-item"><span>Penerima Tamu : {{ $g -> pentamu}}</span></li>
                            <li class="widget-49-meeting-item"><span>Petugas Parkir: {{ $g -> petparkir}}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $g -> tempat }}</span></li>
                            <div class="news-media video">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($isekolah as $h)
                    <div class="col-sm-6 news-item right">
                        <div class="news-content">
                            <div class="date">
                                <p>{{ $h -> hari ->format('d') }}</p>
                                <small>{{ $h -> hari ->format('M') }}</small>
                            </div>
                            <h2 class="news-title">Ibadah Anak Sekolah Minggu</h2>
                            <span class="widget-49-meeting-time"><h6>Pukul {{date('H:i',strtotime($h -> jam) ) }} WIB</h6></span>
                            <li class="widget-49-meeting-item"><span>Worship Leader : {{ $h -> wsleader }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pemain Musik : {{ $h -> pemainmusik }}</span></li>
                            <li class="widget-49-meeting-item"><span>Pembawa Cerita : {{ $h -> pbwcerita }}</span></li>
                            <li class="widget-49-meeting-item"><span>Tempat : {{ $h -> tempat }}</span></li>
                            <div class="news-media gallery">
                            </div>
                        </div>
                    </div>
                    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection