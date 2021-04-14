@extends('layout/main')

@section('title','Infografis')

@section('breadcrumb')
<a href="/" class="breadcrumb">Beranda</a>
<a href="/lainnya" class="breadcrumb">Lainnya</a>
<a href="/lainnya/infografis" class="breadcrumb">Infografis</a>
@endsection

@section('main')
<main>
  <div class="container">
    
    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Infografis</h6></div>
      </div>

    </div>

    <div class="section">
      <div class="row">
        <div class="col s6 m4 center-align"><p>Konten</p></div>
        <div class="col s6 m4 center-align"><p>Konten</p></div>
        <div class="col s6 m4 center-align"><p>Konten</p></div>
        <div class="col s6 m4 center-align"><p>Konten</p></div>
      </div>
    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection