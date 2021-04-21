@extends('layout/main')

@section('title','Kategori')

@section('breadcrumb')
<a href="/" class="breadcrumb">Beranda</a>
<a href="/kategori" class="breadcrumb">Kategori</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
          <h6>Kategori</h6>
          <a class="waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="col s12 left-align">
          <table class="highlight">
            <thead>
              <tr>
                  <th>Kategori</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sosial dan Kependudukan</td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Ekonomi dan Perdagangan</td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Pertanian dan Pertambangan</td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col s12 left-align">
          <h6>Sub Kategori</h6>
          <a class="waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="col s12 left-align">
          <table class="highlight">
            <thead>
              <tr>
                  <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sosial dan Kependudukan</td>
                <td><a class="waves-effect waves-light btn-small teal darken-3">Penduduk</a></td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Ekonomi dan Perdagangan</td>
                <td><a class="waves-effect waves-light btn-small teal darken-3">Inflasi</a></td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Pertanian dan Pertambangan</td>
                <td><a class="waves-effect waves-light btn-small teal darken-3">Holtikultura</a></td>
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      {{-- <div class="row">
        <div class="col s12 left-align">
          <ul class="collapsible expandable">
            <li>
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small btn-edit blue darken-2"><i class="material-icons left">add</i>Tambah</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit"><i class="material-icons left">mode_edit</i>Edit</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit red darken-2"><i class="material-icons left">delete</i>Hapus</a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Sosial dan Kependudukan</p>
              </div>
              <div class="collapsible-body collection">
                <a href="#!" class="collection-item">
                  Agama
                </a>
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
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small btn-edit blue darken-2"><i class="material-icons left">add</i>Tambah</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit"><i class="material-icons left">mode_edit</i>Edit</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit red darken-2"><i class="material-icons left">delete</i>Hapus</a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Ekonomi dan Perdagangan</p>
              </div>
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
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small btn-edit blue darken-2"><i class="material-icons left">add</i>Tambah</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit"><i class="material-icons left">mode_edit</i>Edit</a>
                <p>&nbsp;&nbsp;</p>
                <a class="waves-effect waves-light btn-small btn-edit red darken-2"><i class="material-icons left">delete</i>Hapus</a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Pertanian dan Pertambangan</p>
              </div>
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
      </div> --}}

    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection