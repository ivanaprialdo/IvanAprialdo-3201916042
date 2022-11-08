@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bidang Pelayanan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-7" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/bidangpelayanan/pelayanananak" class="btn btn-primary mb-3">Pelayanan Anak</a>
        <a href="/dashboard/bidangpelayanan/pelayananremaja" class="btn btn-primary mb-3">Pelayanan Remaja</a>
        <a href="/dashboard/bidangpelayanan/pelayananpemuda" class="btn btn-primary mb-3">Pelayanan Pemuda</a>
        <a href="/dashboard/bidangpelayanan/pelayananperkaria" class="btn btn-primary mb-3">Pelayanan Perkaria</a>
        <a href="/dashboard/bidangpelayanan/pelayananperkauan" class="btn btn-primary mb-3">Pelayanan Perkauan</a>
        
        <div class="row px-2">
        <hr>
        
        {{-- <div class="text-center">
            <h4 class="btn btn-secondary">Pelayanan Anak</h4>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Sekretaris</th>
                    <th scope="col">Bendahara</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pelayanananak as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->ketua }}</td>
                        <td>{{ $data->sekretaris }}</td>
                        <td>{{ $data->bendehara }}</td>

                        <td>

                            <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr> --}}

        <div class="col-md-12">
            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    <div class="media-left pr-12">
                    </div>
                    @foreach ($pelayanananak as $data)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pelayanan Anak</h4>
                        </div>
                        <th>Ketua : {{ $data->ketua }}</th>
                        <br>
                        <th>Sekretaris:{{ $data->sekretaris }}</th>
                        <br>
                        <th>bendehara :{{ $data->bendehara }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pelayanananak as $data)
                        <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/bidangpelayanan/editpelayanananak/{{ $data->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/pelayanananak/hapus/{{ $data->id }}">Hapus</a>
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
                    @foreach ($pelayananremaja as $datab)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pelayanan Remaja</h4>
                        </div>
                        <th>Ketua : {{ $datab->ketua }}</th>
                        <br>
                        <th>Sekretaris:{{ $datab->sekretaris }}</th>
                        <br>
                        <th>bendehara :{{ $datab->bendehara }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pelayananremaja as $datab)
                        <a class="btn btn-xs fs-10 btn-bold btn-primary" href="/bidangpelayanan/editpelayananremaja/{{ $datab->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger"  href="/pelayananremaja/hapus/{{ $datab->id }}">Hapus</a>
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
                    @foreach ($pelayananpemuda as $datac)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pelayanan Pemuda</h4>
                        </div>
                        <th>Ketua : {{ $datac->ketua }}</th>
                        <br>
                        <th>Sekretaris:{{ $datac->sekretaris }}</th>
                        <br>
                        <th>bendehara :{{ $datac->bendehara }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pelayananpemuda as $datac)
                        <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/bidangpelayanan/editpelayananpemuda/{{ $data->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/pelayananpemuda/hapus/{{ $data->id }}">Hapus</a>
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
                    @foreach ($pelayananperkaria as $datac)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pelayanan Perkaria</h4>
                        </div>
                        <th>Ketua : {{ $datac->ketua }}</th>
                        <br>
                        <th>Sekretaris:{{ $datac->sekretaris }}</th>
                        <br>
                        <th>bendehara :{{ $datac->bendehara }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pelayananperkaria as $datac)
                        <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/bidangpelayanan/editpelayananperkaria/{{ $datac->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/pelayananperkaria/hapus/{{ $datac->id }}">Hapus</a>
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
                    @foreach ($pelayananperkauan as $datae)
                    <div class="media-body">
                        <div class="mb-2">
                        <h4>Pelayanan Perkauan</h4>
                        </div>
                        <th>Ketua : {{ $datae->ketua }}</th>
                        <br>
                        <th>Sekretaris:{{ $datae->sekretaris }}</th>
                        <br>
                        <th>bendehara :{{ $datae->bendehara }}</th>
                        <br>
                    </div>
                    @endforeach
                </div>
                <footer class="card-footer flexbox align-items-center">
                    <div>
                    </div>
                    <div class="card-hover-show">
                        @foreach ($pelayananperkauan as $datae)
                        <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/bidangpelayanan/editpelayananperkauan/{{ $datae->id }}">Edit</a>
                        <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/pelayananperkauan/hapus/{{ $datae->id }}">Hapus</a>
                        @endforeach
                    </div>
                </footer>
            </div>
            <br>
        </div>
{{-- 
        <div class="text-center">
            <h4 class="btn btn-secondary">Pelayanan Remaja</h4>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Sekretaris</th>
                    <th scope="col">Bendahara</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pelayananremaja as $datab)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datab->ketua }}</td>
                        <td>{{ $datab->sekretaris }}</td>
                        <td>{{ $datab->bendehara }}</td>

                        <td>

                            <a href="/dashboard/destroy/{{ $datab->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $datab->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>

        <div class="text-center">
            <h4 class="btn btn-secondary">Pelayanan Pemuda</h4>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Sekretaris</th>
                    <th scope="col">Bendahara</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pelayananpemuda as $datac)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datac->ketua }}</td>
                        <td>{{ $datac->sekretaris }}</td>
                        <td>{{ $datac->bendehara }}</td>

                        <td>

                            <a href="/dashboard/destroy/{{ $datac->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $datac->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>

        <div class="text-center">
            <h4 class="btn btn-secondary">Pelayanan Perkaria</h4>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Sekretaris</th>
                    <th scope="col">Bendahara</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pelayananperkaria as $datad)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datad->ketua }}</td>
                        <td>{{ $datad->sekretaris }}</td>
                        <td>{{ $datad->bendehara }}</td>

                        <td>

                            <a href="/dashboard/destroy/{{ $datad->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $datad->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <div class="text-center">
            <h4 class="btn btn-secondary">Pelayanan Perkauan</h4>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Sekretaris</th>
                    <th scope="col">Bendahara</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pelayananperkauan as $datae)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datae->ketua }}</td>
                        <td>{{ $datae->sekretaris }}</td>
                        <td>{{ $datae->bendehara }}</td>

                        <td>

                            <a href="/dashboard/destroy/{{ $datae->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $datae->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr> --}}
     {{-- end row --}}
    </div>
@endsection
