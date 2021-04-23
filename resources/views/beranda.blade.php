@extends('layout/main')

@section('title','Beranda')

@section('breadcrumb')
<a href="." class="breadcrumb">Beranda</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Sosial dan Kependudukan</h6></div>
      </div>

      <div class="row  center-align" style="margin-bottom: 0.5 !important">
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light blue darken-2"><i class="mdi mdi-human-male-female"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light amber"><i class="mdi mdi-account"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light brown"><i class="mdi mdi-cogs"></i></a></div>
      </div>

      <div class="row  center-align">
        <div class="col s4 center-align">Penduduk</div>
        <div class="col s4 center-align">Kemiskinan</div>
        <div class="col s4 center-align">Tenaga Kerja</div>
      </div>

      <div class="row  center-align" style="margin-bottom: 0.5 !important">
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light purple lighten-1"><i class="mdi mdi-eye"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light indigo darken-3"><i class="mdi mdi-office-building"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light blue-grey lighten-2"><i class="mdi mdi-dots-horizontal"></i></a></div>
      </div>

      <div class="row center-align">
        <div class="col s4 center-align">IPM</div>
        <div class="col s4 center-align">Pemerintahan</div>
        <div class="col s4 center-align">Lihat Semua</div>
      </div>

    </div>

    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Ekonomi dan Perdagangan</h6></div>
      </div>

      <div class="row  center-align" style="margin-bottom: 0.5 !important">
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light amber darken-4"><i class="mdi mdi-finance"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light deep-orange darken-4"><i class="mdi mdi-currency-usd"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light blue-grey darken-3"><i class="mdi mdi-arrow-expand"></i></a></div>
      </div>

      <div class="row  center-align">
        <div class="col s4 center-align">Pertumbuhan Ekonomi</div>
        <div class="col s4 center-align">Inflasi</div>
        <div class="col s4 center-align">Ekspor dan Impor</div>
      </div>

      <div class="row  center-align" style="margin-bottom: 0.5 !important">
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light cyan lighten-1"><i class="mdi mdi-map-marker"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light light-green darken-2"><i class="mdi mdi-sprout"></i></a></div>
        <div class="col s4 center-align"><a class="btn-floating btn-large waves-effect waves-light blue-grey lighten-2"><i class="mdi mdi-dots-horizontal"></i></a></div>
      </div>

      <div class="row center-align">
        <div class="col s4 center-align">Pariwisata</div>
        <div class="col s4 center-align">Nilai Tukar Petani</div>
        <div class="col s4 center-align">Lihat Semua</div>
      </div>

    </div>

    <div class="section">
      <div class="row">
        <div class="col s8 left-align"><h6>Publikasi Terbaru</h6></div>
        <div class="col s4 right-align"><a href="publikasi" class="waves-effect waves-teal btn-flat"><h6 style="color:#0f8ed6 !important">Lainnya ></h6></a></div>
      </div>
      <div class="row">
        <div class="col s12 left-align"><p>Lorem ipsum dolor sit amet</p></div>
      </div>
    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>

@endsection