@extends('layouts.main')

@section('container')

    <section style="height: 80px">
    </section>
                  <section class="pricing-section">
                    <div class="container">
                    <div class="row justify-content-md-center">
                      <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section-title text-center title-ex1">
                          <h2>Badan Pengurus Jemaat</h2>
                          <p>Badan Pengurus Jemaat Gereja Kemah Injil Indonesia Tiberias Sekadau</p>
                        </div>
                      </div>
                    </div>
                    <!-- Pricing Table starts -->
                    <div class="row">
                      <div class="col-md-4 mb-4 ">
                      <div class="price-card featured">
                        <h2>Pengembalaan</h2>
                        @foreach ($pengembalaan as $a)
                        <li>{{$a->nama}}</li>
                       @endforeach

                      </ul>
                    </div>
                  </div>
                    <div class="col-md-4 mb-3">
                        <div class="price-card ">
                          <h2>Penasehat</h2>
                          @foreach ($penasehat as $b)
                          <li>{{$b->nama}}</li>
                         @endforeach
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-4 mb-3">
                        <div class="price-card featured">
                          <h2>Pengurus Inti</h2>
                            <li>Ketua             : {{ $pengurusinti->ketua}}</li>
                            <li>Wakil Ketua I     : {{ $pengurusinti->wakilketuasatu }}</li>
                            <li>Wakil Ketua II    : {{ $pengurusinti->wakilketuadua}}</li>
                            <li>Sekretaris        : {{ $pengurusinti->sekretaris }}</li>
                            <li>Wakil Sekretaris  : {{ $pengurusinti->wakilsekretaris }}</li>
                            <li>Bendahara         : {{ $pengurusinti->bendehara }}</li>
                            <li>Wakil Bendahara   : {{ $pengurusinti->wakilbendehara }}</li>
                            <li>Staf Tata Usaha   : {{ $pengurusinti->staftatausaha }}</li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-20 mb-3">
                        <div class="col-md-20 mb-4">
                          <div class="price-card">
                            <h2>Seksi-Seksi Pelayanan</h2>
                              <li>Seksi Pelayanan Anak      : {{ $seksipelayanan->spa}}</li>
                              <li>Seksi Pelayanan Remaja    : {{ $seksipelayanan->spr }}</li>
                              <li>Seksi Pelayanan Pemuda    : {{ $seksipelayanan->sppemuda }}</li>
                              <li>Seksi Pelayanan Perkaria  : {{ $seksipelayanan->spperkaria }}</li>
                              <li>Seksi Pelayanan Perkauan  : {{ $seksipelayanan->spperkauan }}</li>
                              <li>Seksi Pelayanan Misi & Penginjilan  : {{ $seksipelayanan->spmp }}</li>
                              <li>Seksi Pelayanan Diakonia, Sosial dan Tanggap Bencana : {{ $seksipelayanan->spdstb }}</li>
                              <li>Seksi Pelayanan Ibadah & Musik  : {{ $seksipelayanan->spim }}</li>
                              <li>Seksi Pendidikan & SDM    : {{ $seksipelayanan->sps }}</li>
                              <li>Seksi Hukum & Advokasi    : {{ $seksipelayanan->sha }}</li>
                              <li>Seksi Pembangunan         : {{ $seksipelayanan->sp }}</li>
                              <li>Seksi Perlengkapan & Aset : {{ $seksipelayanan->spaset }}</li>
                              <li>Seksi Litbang & Media Digital : {{ $seksipelayanan->slmd}}</li>
                              <li>Seksi Kaum Profesional/LP2KI  : {{ $seksipelayanan->skpl }}</li>
                          </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </section>
@endsection
