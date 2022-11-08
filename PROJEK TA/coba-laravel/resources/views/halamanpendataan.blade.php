@extends('layouts.main')

@section('container')
    <section style="height: 90px">
    </section>
    {{-- <h1>Halaman Pendataan Jemaat</h1> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Page title -->
                        <div class="card shadow-2-strong card-registration mt-5 mb-4" style="border-radius: 15px;">
                          <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Pendataan Jemaat GKII Tiberias Jemaat Sekadau</h3>
                            <form action="/halamanpendataan" method="POST">
                              @csrf
                
                              <div class="row">
                                <div class="col-md-6 mb-4">
                
                                  <div class="form-outline">
                                    <input type="text" id="firstName" name="nama" required class="form-control form-control-lg" />
                                    <label class="form-label" for="firstName">Nama Lengkap</label>
                                  </div>
                
                                </div>
                                <div class="col-md-6 mb-4">
                
                                  <div class="form-outline">
                                    <input type="text" id="lastName" name="alamat" required class="form-control form-control-lg" />
                                    <label class="form-label" for="lastName">Alamat</label>
                                  </div>
                
                                </div>
                              </div>
                
                              <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                
                                  <div class="form-outline datepicker w-100">
                                    <input type="text" class="form-control form-control-lg" required name="ttl" id="birthdayDate" />
                                    <label for="birthdayDate" class="form-label">Tanggal Lahir</label>
                                  </div>
                
                                </div>
                                <div class="col-md-6 mb-4">
                
                                  <h6 class="mb-2 pb-1">Jenis Kelamin: </h6>
                
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" required id="maleGender"
                                      value="pria" />
                                    <label class="form-check-label" for="maleGender">Laki - Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" required id="femaleGender"
                                      value="wanita"  />
                                    <label class="form-check-label" for="femaleGender">Perempuan</label>
                                  </div>
                                </div>
                              </div>
                
                              <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                
                                  <div class="form-outline">
                                    <input type="text" id="emailAddress" name="pekerjaan" required class="form-control form-control-lg" />
                                    <label class="form-label" for="emailAddress">Pekerjaan</label>
                                  </div>
                
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                
                                  <div class="form-outline">
                                    <input type="text" id="phoneNumber" name="statusbaptis" required class="form-control form-control-lg" />
                                    <label class="form-label" for="phoneNumber">Status Baptisan</label>
                                  </div>
                
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                
                                  <div class="form-outline">
                                    <input type="text" id="emailAddress" name="nohp" required class="form-control form-control-lg" />
                                    <label class="form-label" for="emailAddress">No Hp</label>
                                  </div>
                                </div>
                              </div>

                              <div class="mt-2 pt-1">
                                <input class="btn btn-primary" type="submit" value="Simpan" />
                              </div>
                
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-2 text-center">Data Jemaat GKII Tiberias Sekadau</h5>
            <hr>
              </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-6">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 font-medium pl-4">No</th>
                      <th scope="col" class="border-0 font-medium">Nama Lengkap</th>
                      <th scope="col" class="border-0 font-medium">Alamat</th>
                      <th scope="col" class="border-0 font-medium">Tanggal Lahir</th>
                      <th scope="col" class="border-0 font-medium">Jenis Kelamin</th>
                      <th scope="col" class="border-0 font-medium">Pekerjaan</th>
                      <th scope="col" class="border-0 font-medium">Status Baptisan</th>
                      <th scope="col" class="border-0 font-medium">No Hp</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_jemaat as $data)
                    <tr>
                      <td class="pl-4">{{ $loop->iteration }}</td>
                      <td>
                          <h6 class="font-medium mb-0">{{ $data->nama }}</h6>
                      </td>
                      <td>
                        <h6 class="font-medium mb-0">{{ $data->alamat }}</h6>
                      </td>
                      <td>
                        <h6 class="font-medium mb-0">{{ $data->ttl }}</h6>
                      </td>
                      <td>
                        <h6 class="font-medium mb-0">{{ $data->gender }}</h6>
                      </td>
                      <td>
                        <h6 class="font-medium mb-0">{{ $data->pekerjaan }}</h6>
                      </td>
                      <td>
                        <h6 class="font-medium mb-0">{{ $data->statusbaptis }}</h6>
                      </td>
                      <td><h6 class="font-medium mb-0">{{ $data->nohp }}</h6><br>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{-- <div class="pt-4">
                  <ul class="pagination justify-content-end mb-3">
                      <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                      </li>
                  </ul>
              </div> --}}
            </div>
        </div>
    </div>
    <div class="d-flex w-100 justify-content-end mt-3">
      {{ $data_jemaat->links() }}
    </div>
    
</div>
</div>
<hr>
@endsection
