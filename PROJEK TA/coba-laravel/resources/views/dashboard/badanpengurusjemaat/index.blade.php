@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Badan pengurus Jemaat</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-7" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/badanpengurusjemaat/pengembalaan" class="btn btn-primary mb-3">Pengembalaan</a>
        <a href="/dashboard/badanpengurusjemaat/penasehat" class="btn btn-primary mb-3">Penasehat</a>
        <a href="/dashboard/badanpengurusjemaat/pengurusinti" class="btn btn-primary mb-3">Pengurus Inti</a>
        <a href="/dashboard/badanpengurusjemaat/seksiseksi" class="btn btn-primary mb-3">Seksi-Seksi Pelayanan</a>
       
        
        <div class="row px-2">
        <hr>

        <div class="col-md-12">
            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    @foreach ($pengembalaan as $data)
                    <div class="media-left pr-12">
                    </div>
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pengembalaan</h4>
                        </div>
                        <th>{{ $data->nama}}</th>
                        <br>
                    </div>
                    @endforeach 
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pengembalaan as $data)
                        
                        <a class="btn btn-xs fs-10 btn-bold btn-primary mb-2" href="/badanpengurusjemaat/editpengembalaan/{{ $data->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger mb-2" href="/pengembalaan/hapus/{{ $data->id }}">Hapus</a>
                        <br>
                        @endforeach
                    </div>
                </footer>
            </div>
            <br>
        </div>


        <div class="col-md-12">
            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    @foreach ($penasehat as $data)
                    <div class="media-left pr-12">
                    </div>
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Penasehat</h4>
                        </div>
                        <th>{{ $data->nama}}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">

                        @foreach ($penasehat as $data)
                        <a class="btn btn-xs fs-17 btn-bold btn-primary mb-2"  href="/badanpengurusjemaat/editpenasehat/{{ $data->id }}">Edit</a>
                        <a class="btn btn-xs fs-17 btn-bold btn-danger mb-2" href="/penasehat/hapus/{{ $data->id }}">Hapus</a>
                         <br>
                        @endforeach
                    </div>
                </footer>
            </div>
            <br>
        </div>

        <div class="col-md-12">
            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    <div class="media-left pr-12">
                    </div>
                    @foreach ($pengurusinti as $datab)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pengurus Inti</h4>
                        </div>
                        <th>Ketua : {{ $datab->ketua}}</th>
                        <br>
                        <th>Wakil Ketua I : {{ $datab->wakilketuasatu }}</th>
                        <br>
                        <th>Wakil Ketua II : {{ $datab->wakilketuadua}}</th>
                        <br>
                        <th>Sekretaris : {{ $datab->sekretaris }}</th>
                        <br>
                        <th>Wakil Sekretaris : {{ $datab->wakilsekretaris }}</th>
                        <br>
                        <th>Bendahara : {{ $datab->bendehara }}</th>
                        <br>
                        <th>Wakil Bendehara : {{ $datab->wakilbendehara }}</th>
                        <br>
                        <th>Staf Tata Usaha : {{ $datab->staftatausaha }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pengurusinti as $datab)
                        <a class="btn btn-xs fs-17 btn-bold btn-primary" href="/badanpengurusjemaat/editpengurusinti/{{ $datab->id }}">Edit</a>
                        <a class="btn btn-xs fs-17 btn-bold btn-danger" href="/pengurusinti/hapus/{{ $datab->id }}">Hapus</a>
                        @endforeach
                    </div>
                </footer>
            </div>
            <br>
        </div>


        <div class="col-md-12">
            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    <div class="media-left pr-12">
                    </div>
                    @foreach ($seksipelayanan as $datac)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Seksi-Seksi Pelayanan</h4>
                        </div>
                        <th>Seksi Pelayanan Anak : {{ $datac->spa }}</th>
                        <br>
                        <th>Seksi Pelayanan Remaja : {{ $datac->spr }}</th>
                        <br>
                        <th>Seksi Pelayanan Pemuda : {{ $datac->sppemuda }}</th>
                        <br>
                        <th>Seksi Pelayanan Perkaria : {{ $datac->spperkaria }}</th>
                        <br>
                        <th>Seksi Pelayanan Perkauan : {{ $datac->spperkauan }}</th>
                        <br>
                        <th>Seksi Pelayanan Misi & Penginjilan :{{ $datac->spmp }}</th>
                        <br>
                        <th>Seksi Pelayanan Diakonia : {{ $datac->spdstb }}</th>
                        <br>
                        <th>Seksi Pelayanan Ibadah & Musik : {{ $datac->spim }}</th>
                        <br>
                        <th>Seksi Pendidikan & SDM : {{ $datac->sps }}</th>
                        <br>
                        <th>Seksi Hukum & Advokasi : {{ $datac->sha }}</th>
                        <br>
                        <th>Seksi Pembangunan : {{ $datac->sp }}</th>
                        <br>
                        <th>Seksi Perlengkapan & Aset : {{ $datac->spaset }}</th>
                        <br>
                        <th>Seksi Litbang & Media Digital : {{ $datac->slmd}}</th>
                        <br>
                        <th>Seksi Kaum Profesional/LP2KI : {{ $datac->skpl }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">

                        @foreach ($seksipelayanan as $datac)
                        <a class="btn btn-xs fs-17 btn-bold btn-primary" href="/badanpengurusjemaat/editseksipelayanan/{{ $datac->id }}">Edit</a>
                        <a class="btn btn-xs fs-17 btn-bold btn-danger" href="/seksipelayanan/hapus/{{ $datac->id }}">Hapus</a>
                        
                        @endforeach
                    </div>
                </footer>
            </div>
            <br>
        </div>
        
     {{-- end row --}}
    </div>
@endsection
