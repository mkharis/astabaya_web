@extends('layout/main')

@section('title','Tabel')

@section('breadcrumb')
<a href="/" class="breadcrumb">Beranda</a>
<a href="/tabel" class="breadcrumb">Tabel</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Tabel / Indikator</h6></div>
      </div>

      <div class="row">
        <div class="col s12 left-align">
          <ul class="collapsible expandable">
            <li>
              <div class="collapsible-header">Sosial dan Kependudukan</div>
              <div class="collapsible-body collection">
                <a href="#!" class="collection-item">Agama</a>
                <a href="#!" class="collection-item">Gender</a>
                <a href="#!" class="collection-item">Geografi</a>
                <a href="#!" class="collection-item">Iklim</a>
                <a href="#!" class="collection-item">Indeks Pembangunan Manusia</a>
                <a href="#!" class="collection-item">Kemiskinan dan Ketimpangan</a>
                <a href="#!" class="collection-item">Kependudukan</a>
                <a href="#!" class="collection-item">Kesehatan</a>
                <a href="#!" class="collection-item">Konsumsi dan Pengeluaran</a>
                <a href="#!" class="collection-item">Pemerintahan</a>
                <a href="#!" class="collection-item">Pendidikan</a>
                <a href="#!" class="collection-item">Politik dan Keamanan</a>
                <a href="#!" class="collection-item">Sosial Budaya dan Potensi Desa</a>
                <a href="#!" class="collection-item">Tenaga Kerja</a>
              </div>
            </li>
            <li>
              <div class="collapsible-header">Ekonomi dan Perdagangan</div>
              <div class="collapsible-body collection">
                <a href="#!" class="collection-item">Energi</a>
                <a href="#!" class="collection-item">Industri</a>
                <a href="#!" class="collection-item">Inflasi</a>
                <a href="#!" class="collection-item">Keuangan</a>
                <a href="#!" class="collection-item">Komunikasi</a>
                <a href="#!" class="collection-item">Pariwisata</a>
                <a href="#!" class="collection-item">Produk Domestik Regional Bruto</a>
                <a href="#!" class="collection-item">Produk Domestik Regional Bruto (Lapangan Usaha)</a>
                <a href="#!" class="collection-item">Produk Domestik Regional Bruto (Pengeluaran)</a>
                <a href="#!" class="collection-item">Transportasi</a>
              </div>
            </li>
            <li>
              <div class="collapsible-header">Pertanian dan Pertambangan</div>
              <div class="collapsible-body collection">
                <a href="#!" class="collection-item">Hortikultura</a>
                <a href="#!" class="collection-item">Kehutanan</a>
                <a href="#!" class="collection-item">Perikanan</a>
                <a href="#!" class="collection-item">Perkebunan</a>
                <a href="#!" class="collection-item">Peternakan</a>
                <a href="#!" class="collection-item">Tanaman Pangan</a>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection