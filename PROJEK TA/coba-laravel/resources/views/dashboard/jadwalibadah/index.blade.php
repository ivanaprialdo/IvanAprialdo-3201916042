@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jadwal Kebaktian</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-7" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/jadwalibadah/ibadahremaja" class="btn btn-primary mb-3">Ibadah Remaja</a>
        <a href="/dashboard/jadwalibadah/ibadahperkaria" class="btn btn-primary mb-3">Ibadah Perkaria</a>
        <a href="/dashboard/jadwalibadah/ibadahkeluarga" class="btn btn-primary mb-3">Ibadah Keluarga</a>
        <a href="/dashboard/jadwalibadah/ibadahpersekutuan" class="btn btn-primary mb-3">Ibadah Persekutuan Doa Pemuda</a>
        <a href="/dashboard/jadwalibadah/ibadahperkauan" class="btn btn-primary mb-3">Ibadah Perkauan</a>
        <a href="/dashboard/jadwalibadah/ibadahpemuda" class="btn btn-primary mb-3">Ibadah Pemuda</a>
        <a href="/dashboard/jadwalibadah/ibadahmingguraya" class="btn btn-primary mb-3">Ibadah Minggu Raya</a>
        <a href="/dashboard/jadwalibadah/ibadahsekolahminggu" class="btn btn-primary mb-3">Ibadah Anak Sekolah Minggu</a>
        {{-- <a href="#" class="btn btn-primary mb-3">Create new category</a> --}}
        
        <div class="row px-2">
        <hr>

        {{-- <div class="text-center">
            <h4 class="btn btn-secondary">Ibadah Remaja</h4>
        </div>
        <table class="table table-striped table-sm text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Worship Leader</th>
                    <th scope="col">Pemain Musik</th>
                    <th scope="col">Pengkhotbah</th>
                    <th scope="col">Hari Tanggal</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Tempat</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ibadahremaja as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->wsleader }}</td>
                        <td>{{ $data->pemainmusik }}</td>
                        <td>{{ $data->pkhotbah }}</td>
                        <td>{{ $data->hari->format('l, d F Y ') }}</td>
                        <td>{{ $data->jam}}</td>
                        <td>{{ $data->tempat }}</td>
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
        <hr>

        <div class="text-center">
          <h4 class="btn btn-secondary">Ibadah Perkaria</h4>
        </div>
        <table class="table table-striped table-sm text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Worship Leader</th>
                    <th scope="col">Pemain Musik</th>
                    <th scope="col">Pengkhotbah</th>
                    <th scope="col">Hari Tanggal</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Tempat</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($iperkaria as $datab)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datab->wsleader }}</td>
                        <td>{{ $datab->pemainmusik }}</td>
                        <td>{{ $datab->pkhotbah }}</td>
                        <td>{{ $datab->hari->format('l, d F Y') }}</td>
                        <td>{{ $datab->jam }}</td>
                        <td>{{ $datab->tempat }}</td>
                        <td>
                            <a href="/dashboard/destroy/{{ $datab->id }}" class="badge bg-danger border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                            <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                                onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <hr>
  
    <div class="text-center">
      <h4 class="btn btn-secondary">Ibadah Keluarga</h4>
    </div>
    <table class="table table-striped table-sm text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Worship Leader</th>
                <th scope="col">Pemain Musik</th>
                <th scope="col">Pengkhotbah</th>
                <th scope="col">Hari Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Tempat</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($ikeluarga as $datac)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datac->wsleader }}</td>
                    <td>{{ $datac->pemainmusik }}</td>
                    <td>{{ $datac->pkhotbah }}</td>
                    <td>{{ $datac->hari->format('l, d F Y') }}</td>
                    <td>{{ $datac->jam }}</td>
                    <td>{{ $datac->tempat }}</td>
                    <td>{{ $datac->alamat }}</td>
                    <td>
                        <a href="/dashboard/destroy/{{ $datac->id }}" class="badge bg-danger border-0"
                            onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                        <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                            onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     <hr>

     <div class="text-center">
      <h4 class="btn btn-secondary">Ibadah Persekutuan Doa Pemuda</h4>
  </div>
  <table class="table table-striped table-sm text-center">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Worship Leader</th>
              <th scope="col">Pemain Musik</th>
              <th scope="col">Pengkhotbah</th>
              <th scope="col">Hari Tanggal</th>
              <th scope="col">Jam</th>
              <th scope="col">Tempat</th>
              <th scope="col">Alamat</th>
          </tr>
      </thead>
      <tbody>

          @foreach ($ipersedoapemuda as $datad)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $datad->wsleader }}</td>
                  <td>{{ $datad->pemainmusik }}</td>
                  <td>{{ $datad->pkhotbah }}</td>
                  <td>{{ $datad->hari->format('l, d F Y') }}</td>
                  <td>{{ $datad->jam }}</td>
                  <td>{{ $datad->tempat }}</td>
                  <td>{{ $datad->alamat }}</td>
                  <td>
                      <a href="/dashboard/destroy/{{ $datad->id }}" class="badge bg-danger border-0"
                          onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                          <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                            onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
   <hr>

   <div class="text-center">
    <h4 class="btn btn-secondary">Ibadah Perkauan</h4>
</div>
<table class="table table-striped table-sm text-center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Worship Leader</th>
            <th scope="col">Pemain Musik</th>
            <th scope="col">Pengkhotbah</th>
            <th scope="col">Hari Tanggal</th>
            <th scope="col">Jam</th>
            <th scope="col">Tempat</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($iperkauan as $datae)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datae->wsleader }}</td>
                <td>{{ $datae->pemainmusik }}</td>
                <td>{{ $datae->pkhotbah }}</td>
                <td>{{ $datae->hari->format('l, d F Y') }}</td>
                <td>{{ $datae->jam }}</td>
                <td>{{ $datae->tempat }}</td>
                <td>
                    <a href="/dashboard/destroy/{{ $datae->id }}" class="badge bg-danger border-0"
                        onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                        <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                          onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 <hr>

 <div class="text-center">
  <h4 class="btn btn-secondary">Ibadah Pemuda</h4>
</div>
<table class="table table-striped table-sm text-center">
  <thead>
      <tr>
          <th scope="col">No</th>
          <th scope="col">Worship Leader</th>
          <th scope="col">Pemain Musik</th>
          <th scope="col">Pengkhotbah</th>
          <th scope="col">Hari Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Tempat</th>
      </tr>
  </thead>
  <tbody>

      @foreach ($ipemuda as $dataf)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $dataf->wsleader }}</td>
              <td>{{ $dataf->pemainmusik }}</td>
              <td>{{ $dataf->pkhotbah }}</td>
              <td>{{ $dataf->hari->format('l, d F Y') }}</td>
              <td>{{ $dataf->jam }}</td>
              <td>{{ $dataf->tempat }}</td>
              <td>
                  <a href="/dashboard/destroy/{{ $dataf->id }}" class="badge bg-danger border-0"
                      onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                      <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                        onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
              </td>
          </tr>
      @endforeach
  </tbody>
</table>
<hr>

<div class="text-center">
  <h4 class="btn btn-secondary">Ibadah Minggu Raya</h4>
</div>
<table class="table table-striped table-sm text-center">
  <thead>
      <tr>
          <th scope="col">No</th>
          <th scope="col">Worship Leader</th>
          <th scope="col">Pemain Musik</th>
          <th scope="col">Singer</th>
          <th scope="col">Pengkhotbah</th>
          <th scope="col">Pendoa Syafaat</th>
          <th scope="col">Petugas Kolekte</th>
          <th scope="col">Penerima Tamu</th>
          <th scope="col">Petugas Parkir</th>
          <th scope="col">Hari Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Tempat</th>
      </tr>
  </thead>
  <tbody>

      @foreach ($iminggu as $datag)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $datag->wsleader }}</td>
              <td>{{ $datag->pemainmusik }}</td>
              <td>{{ $datag->singer }}</td>
              <td>{{ $datag->pkhotbah }}</td>
              <td>{{ $datag->pendoa }}</td>
              <td>{{ $datag->ptgskolekte }}</td>
              <td>{{ $datag->pentamu }}</td>
              <td>{{ $datag->petparkir }}</td>
              <td>{{ $datag->hari->format('l, d F Y') }}</td>
              <td>{{ $datag->jam }}</td>
              <td>{{ $datag->tempat }}</td>
              <td>
                  <a href="/dashboard/destroy/{{ $datag->id }}" class="badge bg-danger border-0"
                      onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                      <a href="/dashboard/destroy/{{ $data->id }}" class="badge bg-primary border-0"
                        onclick="return confirm('Are You Sure?')"><span data-feather="edit"></span></a>
              </td>
          </tr>
      @endforeach
  </tbody>
</table>
<hr>

<div class="text-center">
  <h4 class="btn btn-secondary">Ibadah Anak Sekolah Minggu</h4>
</div>
<table class="table table-striped table-sm text-center">
  <thead>
      <tr>
          <th scope="col">No</th>
          <th scope="col">Worship Leader</th>
          <th scope="col">Pemain Musik</th>
          <th scope="col">Pembawa Cerita</th>
          <th scope="col">Hari Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Tempat</th>
      </tr>
  </thead>
  <tbody>

      @foreach ($isekolah as $datah)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $datah->wsleader }}</td>
              <td>{{ $datah->pemainmusik }}</td>
              <td>{{ $datah->pbwcerita}}</td>
              <td>{{ $datah->hari->format('l, d F Y') }}</td>
              <td>{{ $datah->jam }}</td>
              <td>{{ $datah->tempat }}</td>
              <td>
                  <a href="/dashboard/destroy/{{ $datah->id }}" class="badge bg-danger border-0"
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
            @foreach ($ibadahremaja as $data)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Remaja</h4>
                </div>
                <th>Worship Leader : {{ $data->wsleader }}</th>
                <br>
                <th>Pemain Musik :{{ $data->pemainmusik }}</th>
                <br>
                <th>Pengkhotbah :{{ $data->pkhotbah }}</th>
                <br>
                <th>Hari Tanggal :{{ $data->hari->format('l, d F Y') }}</th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($data -> jam) ) }} Wib</th>
                <br>
                <th>Tempat :{{ $data->tempat }}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($ibadahremaja as $data)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahremaja/{{ $data->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahremaja/hapus/{{ $data->id }}">Hapus</a>
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
            @foreach ($iperkaria as $datab)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Perkaria</h4>
                </div>
                <th>Worship Leader :{{ $datab->wsleader}}</th>
                <br>
                <th>Pemain Musik : {{ $datab->pemainmusik }}</th>
                <br>
                <th>Pengkhotbah : {{ $datab->pkhotbah }}</th>
                <br>
                <th>Hari Tanggal :{{ $datab->hari->format('l, d F Y') }} </th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datab -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{ $datab->tempat }}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($iperkaria as $datab)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahperkaria/{{ $datab->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahperkaria/hapus/{{ $datab->id }}">Hapus</a>
                @endforeach
            </footer>
    </div>
    <br>
</div>

<div class="col-md-12">
    <div class="card b-1 hover-shadow mb-20">
        <div class="media card-body">
            <div class="media-left pr-12">
            </div>
            @foreach ($ikeluarga as $datac)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Keluarga</h4>
                </div>
                <th>Worship Leader : {{ $datac->wsleader}}</th>
                <br>
                <th>Pemain Musik : {{ $datac->pemainmusik}}</th>
                <br>
                <th>Pengkhotbah : {{ $datac->pkhotbah}}</th>
                <br>
                <th>Hari Tanggal : {{ $datac->hari->format('l, d F Y') }}</th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datac -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{ $datac->tempat }}</th>
                <br>
                <th>Alamat : {{ $datac->alamat}}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($ikeluarga as $datac)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahkeluarga/{{ $datac->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahkeluarga/hapus/{{ $datac->id }}">Hapus</a>
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
            @foreach ($ipersedoapemuda as $datad)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Persekutuan Doa Pemuda</h4>
                </div>
                <th>Worship Leader : {{ $datad->wsleader }}</th>
                <br>
                <th>Pemain Musik : {{ $datad->pemainmusik }}</th>
                <br>
                <th>Pengkhotbah: {{ $datad->pkhotbah }}</th>
                <br>
                <th>Hari Tanggal : {{ $datad->hari->format('l, d F Y') }}</th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datad -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{ $datad->tempat }}</th>
                <br>
                <th>Alamat : {{ $datad->alamat}}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($ipersedoapemuda as $datad)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahpersekutuan/{{ $datad->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahpersekutuan/hapus/{{ $datad->id }}">Hapus</a>
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
            @foreach ($iperkauan as $datae)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Perkauan</h4>
                </div>
                <th>Worship Leader : {{ $datae->wsleader}}</th>
                <br>
                <th>Pemain Musik : {{ $datae->pemainmusik}}</th>
                <br>
                <th>Pengkhotbah : {{ $datae->pkhotbah}}</th>
                <br>
                <th>Hari Tanggal : {{ $datae->hari->format('l, d F Y') }}</th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datae -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{ $datae->tempat}}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($iperkauan as $datae)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahperkauan/{{ $datae->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahperkauan/hapus/{{ $datae->id }}">Hapus</a>
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
            @foreach ($ipemuda as $dataf)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Pemuda</h4>
                </div>
                <th>Worship Leader : {{ $dataf->wsleader }}</th>
                <br>
                <th>Pemain Musik : {{ $dataf->pemainmusik }}</th>
                <br>
                <th>Pengkhotbah : {{ $dataf->pkhotbah }}</th>
                <br>
                <th>Hari Tanggal : {{ $dataf->hari->format('l, d F Y') }} </th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($dataf -> jam) ) }} Wib</th>
                <br>
                <th>Tempat :{{$dataf->tempat}}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($ipemuda as $dataf)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahpemuda/{{ $dataf->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahpemuda/hapus/{{ $dataf->id }}">Hapus</a>
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
            @foreach ($iminggu as $datag)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Minggu Raya</h4>
                </div>
                <th>Worship Leader : {{ $datag->wsleader }}</th>
                <br>
                <th>Singer : {{ $datag->singer }}</th>
                <br>
                <th>Pemain Musik : {{ $datag->pemainmusik }}</th>
                <br>
                <th>Pengkhotbah : {{ $datag->pkhotbah }}</th>
                <br>
                <th>Pendoa Syafaat : {{ $datag->pendoa }}</th>
                <br>
                <th>Petugas Kolekte : {{ $datag->ptgskolekte }}</th>
                <br>
                <th>Penerima Tamu : {{ $datag->pentamu }}</th>
                <br>
                <th>Petugas Parkir : {{ $datag->petparkir }}</th>
                <br>
                <th>Hari Tanggal : {{ $datag->hari->format('l, d F Y') }} </th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datag -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{$datag->tempat}}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($iminggu as $datag)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahmingguraya/{{ $datag->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahmingguraya/hapus/{{ $datag->id }}">Hapus</a>
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
            @foreach ($isekolah as $datah)
            <div class="media-body">
                <div class="mb-2">
                <h4>Ibadah Anak Sekolah Minggu</h4>
                </div>
                <th>Worship Leader : {{ $datah->wsleader }}</th>
                <br>
                <th>Pemain Musik : {{ $datah->pemainmusik }}</th>
                <br>
                <th>Pembawa Cerita : {{ $datah->pbwcerita }}</th>
                <br>
                <th>Hari Tanggal : {{ $datah->hari->format('l, d F Y') }}</th>
                <br>
                <th>Jam : {{ date('H:i',strtotime($datah -> jam) ) }} Wib</th>
                <br>
                <th>Tempat : {{ $datah->tempat }}</th>
                <br>
            </div>
            @endforeach
        </div>
        <footer class="card-footer flexbox align-items-center">
            <div>
            </div>
            <div class="card-hover-show">
                @foreach ($isekolah as $datah)
                <a class="btn btn-xs fs-10 btn-bold btn-primary"href="/jadwalibadah/editibadahsekolahminggu/{{ $datah->id }}">Edit</a>
                <a class="btn btn-xs fs-10 btn-bold btn-danger" href="/ibadahsekolahminggu/hapus/{{ $datah->id }}">Hapus</a>
                @endforeach
            </div>
        </footer>
    </div>
    <br>
</div>

     {{-- end row --}}
    </div>
@endsection
