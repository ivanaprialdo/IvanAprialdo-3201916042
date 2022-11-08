@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Keuangan Pemasukan</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-7" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-7">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Laporan Keuangan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>1</td>
                <td>Saldo Bulanan</td>
                <td>
                    <a href="/bulanan" class="badge bg-info"><span data-feather="eye"> </span></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Kolekte Minggu</td>
                <td>
                    <a href="/kolekte" class="badge bg-info"><span data-feather="eye"> </span></a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Persepuluhan</td>
                <td>
                    <a href="/persepuluhan" class="badge bg-info"><span data-feather="eye"> </span></a>
                </td>
              </tr>    
          </tbody>
        </table>
      </div>


@endsection
