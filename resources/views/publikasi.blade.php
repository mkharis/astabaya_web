@extends('layout/main')

@section('title','Publikasi')

@section('breadcrumb')
<a href="/" class="breadcrumb">Beranda</a>
<a href="/publikasi" class="breadcrumb">Publikasi</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Publikasi</h6></div>
      </div>

    </div>

    <div class="section">
      <div class="row valign-wrapper">
        <!-- Cover -->
        <div class="col s3 center-align valign-wrapper">
          <p>Publikasi Cover</p>
        </div>
        <!-- Title and Date -->
        <div class="col s9 center-align">
          <div class="row">
            <div class="col s9 left-align">
              <p>Publikasi Title</p>
            </div>
          </div>
          <div class="row" style="margin-bottom: 0px">
            <div class="col s9 left-align">
              <p class="orange-text">Publikasi Date</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="divider"></div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection