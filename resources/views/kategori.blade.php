@extends('layout/main')

@section('title','Kategori')

@section('breadcrumb')
<a href="{{ url() }}" class="breadcrumb">Beranda</a>
<a href="{{ url('kategori') }}" class="breadcrumb">Kategori</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
          <h6>Kategori</h6>
          <a href="#modalAddKategori" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="col s12 left-align">
          <table class="highlight" id="listKategori">
            <thead>
              <tr>
                  <th>Kategori</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $k)
              <tr id="{{ $k->id }}"">
                <td class="kategori" data-kategori="{{ $k->kategori }}">{{ $k->kategori }}</td>
                <td class="center-align">
                  <a href="#modalEditKategori" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $k->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                  <a href="#modalRemoveKategori" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $k->id }}">Hapus</a>
                </td>
              </tr>
              @endforeach
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
              @foreach ($subkategori as $sk)
              <tr>
                <td>{{ $sk->kategori }}</td>
                @if ($sk->kategori_id == '3')
                <td><a class="waves-effect waves-light btn-small teal darken-3">{{ $sk->sub_kategori }}</a></td>  
                @elseif ($sk->kategori_id == '2')
                <td><a class="waves-effect waves-light btn-small orange darken-3">{{ $sk->sub_kategori }}</a></td>  
                @else
                <td><a class="waves-effect waves-light btn-small blue darken-3">{{ $sk->sub_kategori }}</a></td>  
                @endif
                <td class="center-align">
                  <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4">Edit</span></a>
                  <a class="waves-effect waves-light btn-small red darken-2">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

    <!-- Modal Structure -->
    {{-- Add Kategori --}}
    <div id="modalAddKategori" class="modal">
      <form action="{{ route('kategoriAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Kategori</h5>
            </div>
            <div class="input-field">
              <input id="kategori" name="kategori" type="text" class="validate edit-kategori">
              <label id="kategori" class="edit-kategori" for="kategori">Kategori</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Edit Kategori --}}
    <div id="modalEditKategori" class="modal">
      <form action="{{ route('kategoriEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Kategori</h5>
            </div>
            <input id="id" name="id" type="hidden" class="validate edit-kategori" value="">
            <div class="input-field">
              <input id="kategori" name="kategori" type="text" class="validate edit-kategori">
              <label id="kategori" class="edit-kategori" for="kategori">Kategori</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>
    
    {{-- Remove Kategori --}}
    <div id="modalRemoveKategori" class="modal">
      <form action="{{ route('kategoriRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="id" name="id" type="hidden" class="validate remove-kategori" value="">
            <div class="section center-align">
              <h5>Apakah Anda yakin?</h5>
            </div>
            <p>Data yang dihapus tidak akan bisa dikembalikan!</p>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small green darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light red darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Hapus</button>
        </div>
      </form>
    </div>

  </div>
</main>
@endsection