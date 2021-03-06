@extends('layout/main')

@section('title','Infografis')

@section('breadcrumb')
<a href="." class="breadcrumb">Beranda</a>
<a href="{{ url('infografis') }}" class="breadcrumb">Infografis</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
          <div class="section">
            <h6>Infografis</h6>
          </div>
          <a href="#modalAddInfografis" class="modal-trigger waves-effect waves-light btn-small blue darken-2"><i class="material-icons left">add</i>Tambah</a>
        </div>
      </div>

      <div class="row">
        <div class="col s12 left-align">
          <table class="highlight" id="listInfografi">
            <thead>
              <tr>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
  
            <tbody>
              @foreach ( $infografis as $ig)
              <tr id="{{ $ig->id }}">
                <td class="link" data-link="{{ $ig->file_path }}"><img class="materialboxed" width="75" src="{{ url($ig->file_path) }}"></td>
                <td class="judul" data-judul="{{ $ig->judul }}">{{ $ig->judul }}</td>
                <td class="center-align">
                  <a href="#modalEditInfografis" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $ig->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                  <a href="#modalRemoveInfografis" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $ig->id }}">Hapus</a>
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
    {{-- Add New Infografis --}}
    <div id="modalAddInfografis" class="modal">
      <form id="formAddInfografis" action="{{ route('infografisAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="col s12">
              <div class="section center-align">
                <h5>Infografis</h5>
              </div>
              <div class="input-field">
                <label class="edit-infografis" for="judul">Judul</label>
                <input id="judul_add" name="judul" type="text" class="validate add-infografis">
              </div>
              <div class="section">
                <div class="input-field">
                  <label class="edit-infografis" for="link">Link Infografis</label>
                  <input id="link_add" name="link" type="text" class="validate add-infografis">
                </div>
              </div>
  
              {{-- <div class="file-field input-field">
                <div class="btn">
                   <span>Pilih</span>
                   <input type="file" name="image"/>
                </div>
                
                <div class="file-path-wrapper">
                   <input class="file-path validate" type="text" placeholder="Unggah Infografis" />
                </div>
             </div> --}}
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Edit Infografis --}}
    <div id="modalEditInfografis" class="modal">
      <form id="formEditInfografis" action="{{ route('infografisEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Infografis</h5>
            </div>
            <input id="id" name="id" type="hidden" class="validate edit-infografis" value="">
            <div class="input-field">
              <label class="edit-infografis" for="judul">Judul</label>
              <input id="judul_edit" name="judul" type="text" class="validate edit-infografis">
            </div>
            <div class="section">
              <div class="input-field">
                <label class="edit-infografis" for="link">Link Infografis</label>
                <input id="link_edit" name="link" type="text" class="validate edit-infografis">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Remove Infografis --}}
    <div id="modalRemoveInfografis" class="modal">
      <form id="formRemoveInfografis" action="{{ route('infografisRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="id" name="id" type="hidden" class="validate remove-infografis" value="">
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