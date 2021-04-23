@extends('layout/main')

@section('title','Publikasi')

@section('breadcrumb')
<a href="." class="breadcrumb">Beranda</a>
<a href="publikasi" class="breadcrumb">Publikasi</a>
@endsection

@section('main')
<main>
  <div class="container">

    <table class="highlight">
      <thead>
        <tr>
            <th class="center-align">Judul</th>
            <th class="center-align">Tanggal Rilis</th>
            <th class="center-align">Nomor Katalog</th>
            <th class="center-align">Nomor Publikasi</th>
            <th class="center-align">Deskripsi</th>
            <th class="center-align">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Produk Domestik Regional Bruto Kota Surabaya Menurut Lapangan Usaha 2016-2020</td>
          <td style="width:100px">5 April 2021</td>
          <td>9302021.3578</td>
          <td>35780.2103</td>
          <td><div style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
            Produk Domestik Regional Bruto Kota Surabaya Menurut 
            Lapangan Usaha Tahun 2016 - 2020 ini merupakan publikasi tahunan yang diterbitkan oleh 
            Badan Pusat Statistik Kota Surabaya. Publikasi ini menyajikan tinjauan perkembangan 
            perekonomian Kota Surabaya secara deskriptif. Dalam publikasi ini disajikan tabel-tabel 
            Produk Domestik Regional Bruto tahun 2016 - 2020 atas dasar harga berlaku dan harga 
            konstan 2010 dalam nilai nominal dan persentase. Sebagai pelengkap ulasan tabel-tabel 
            tersebut, disajikan pula konsep, definisi, ruang lingkup dan metode penghitungan Produk 
            Domestik Regional Bruto (PDRB) menurut lapangan usaha.
          </div></td>
          <td class="center-align">
            <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
            <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
          </td>
        </tr>
        <tr>
          <td>Produk Domestik Regional Bruto Kota Surabaya Menurut Lapangan Usaha 2016-2020</td>
          <td>5 April 2021</td>
          <td>9302021.3578</td>
          <td>35780.2103</td>
          <td><div style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
            Produk Domestik Regional Bruto Kota Surabaya Menurut 
            Lapangan Usaha Tahun 2016 - 2020 ini merupakan publikasi tahunan yang diterbitkan oleh 
            Badan Pusat Statistik Kota Surabaya. Publikasi ini menyajikan tinjauan perkembangan 
            perekonomian Kota Surabaya secara deskriptif. Dalam publikasi ini disajikan tabel-tabel 
            Produk Domestik Regional Bruto tahun 2016 - 2020 atas dasar harga berlaku dan harga 
            konstan 2010 dalam nilai nominal dan persentase. Sebagai pelengkap ulasan tabel-tabel 
            tersebut, disajikan pula konsep, definisi, ruang lingkup dan metode penghitungan Produk 
            Domestik Regional Bruto (PDRB) menurut lapangan usaha.
          </div></td>
          <td class="center-align">
            <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
            <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
          </td>
        </tr>
        <tr>
          <td>Produk Domestik Regional Bruto Kota Surabaya Menurut Lapangan Usaha 2016-2020</td>
          <td>5 April 2021</td>
          <td>9302021.3578</td>
          <td>35780.2103</td>
          <td><div style="width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
            Produk Domestik Regional Bruto Kota Surabaya Menurut 
            Lapangan Usaha Tahun 2016 - 2020 ini merupakan publikasi tahunan yang diterbitkan oleh 
            Badan Pusat Statistik Kota Surabaya. Publikasi ini menyajikan tinjauan perkembangan 
            perekonomian Kota Surabaya secara deskriptif. Dalam publikasi ini disajikan tabel-tabel 
            Produk Domestik Regional Bruto tahun 2016 - 2020 atas dasar harga berlaku dan harga 
            konstan 2010 dalam nilai nominal dan persentase. Sebagai pelengkap ulasan tabel-tabel 
            tersebut, disajikan pula konsep, definisi, ruang lingkup dan metode penghitungan Produk 
            Domestik Regional Bruto (PDRB) menurut lapangan usaha.
          </div></td>
          <td class="center-align">
            <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
            <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>

    {{-- <div class="section">

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
    <div class="divider"></div> --}}

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection