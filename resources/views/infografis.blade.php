@extends('layout/main')

@section('title','Infografis')

@section('breadcrumb')
<a href="." class="breadcrumb">Beranda</a>
<a href="{{ url('infografis') }}" class="breadcrumb">Infografis</a>
@endsection

@section('main')
<main>
  <div class="container">

    <table class="highlight">
      <thead>
        <tr>
            <th>Infografis</th>
            <th>Judul</th>
            <th class="center-align">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td> <img class="materialboxed" width="75" src="{{ url('images/infografis/sp2020.jpg') }}"></td>
          <td>Penduduk Hasil SP2020 Kota Surabaya</td>
          <td class="center-align">
            <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
            <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
          </td>
        </tr>
        <tr>
          <td> <img class="materialboxed" width="75" src="{{ url('images/infografis/kemiskinan.jpg') }}"></td>
          <td>Kemiskinan 2020</td>
          <td class="center-align">
            <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
            <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
    
    {{-- <div class="section">

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
    </div> --}}

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection