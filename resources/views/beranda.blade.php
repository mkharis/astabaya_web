@extends('layout/main')

@section('title','Beranda')

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
          <div class="section">
            <a href="#modalAdd" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
          </div>
        </div>

        <div class="row">
          <div class="col s12 left-align">
            <table class="highlight" id="listDataBeranda">
              <thead>
                <tr>
                    <th>Ikon</th>
                    <th>Judul</th>
                    <th>Nilai</th>
                    <th>Satuan</th>
                    <th>Deskripsi</th>
                    <th class="center-align">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($beranda as $b)
                <tr id="{{ $b->id }}">
                  <td class="ikon" data-ikon="{{ $b->ikon }}"><i><span class="mdi {{ $b->ikon }}"></span></i></td>
                  <td class="judul" data-judul="{{ $b->judul }}">{{ $b->judul }}</td>
                  <td class="isi red-text" data-isi="{{ $b->isi }}" style="font-size:24px">{{ $b->isi }}</td>
                  <td class="satuan grey-text" data-satuan="{{ $b->satuan }}">{{ $b->satuan }}</td>
                  <td class="deskripsi grey-text" style="width: 27%; text-align:justify" data-deskripsi="{{ $b->deskripsi }}">{{ $b->deskripsi }}</td>
                  <td class="center-align">
                    <a href="#modalEdit" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $b->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                    <a href="#modalRemove" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $b->id }}">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

    <!-- Modal Structure -->
    {{-- Add --}}
    <div id="modalAdd" class="modal modal-fixed-footer">
      <form id="formAddBeranda" action="{{ route('berandaAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="input-field col s12">
              <label class="add-ikon" for="ikonadd">Ikon</label>
              <input id="ikonadd" name="ikon" type="text" class="validate add-ikon">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="add-judul" for="juduladd">Judul</label>
              <input id="juduladd" name="judul" type="text" class="validate add-judul">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <label class="add-isi" for="isiadd">Nilai</label>
              <input id="isiadd" name="isi" type="text" class="validate add-isi">
            </div>
            <div class="input-field col s6">
              <label class="add-satuan" for="satuanadd">Satuan</label>
              <input id="satuanadd" name="satuan" type="text" class="validate add-satuan">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="add-deskripsi" for="deskripsiadd">Deskripsi</label>
              <textarea id="deskripsiadd" name="deskripsi" class="materialize-textarea validate add-deskripsi"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Edit --}}
    <div id="modalEdit" class="modal modal-fixed-footer">
      <form id="formEditBeranda" action="{{ route('berandaEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <input id="idEdit" name="id" type="hidden" class="validate edit-id" value="">
          <div class="row">
            <div class="input-field col s12">
              <label class="edit-ikon" for="ikonedit">Ikon</label>
              <input id="ikonedit" name="ikon" type="text" class="validate edit-ikon">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="edit-judul" for="juduledit">Judul</label>
              <input id="juduledit" name="judul" type="text" class="validate edit-judul">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <label class="edit-isi" for="isiedit">Nilai</label>
              <input id="isiedit" name="isi" type="text" class="validate edit-isi">
            </div>
            <div class="input-field col s6">
              <label class="edit-satuan" for="satuanedit">Satuan</label>
              <input id="satuanedit" name="satuan" type="text" class="validate edit-satuan">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="edit-deskripsi" for="deskripsiedit">Deskripsi</label>
              <textarea id="deskripsiedit" name="deskripsi" class="materialize-textarea validate edit-deskripsi"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>
    
    {{-- Remove --}}
    <div id="modalRemove" class="modal">
      <form id="formRemoveBeranda" action="{{ route('berandaRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="idRemove" name="id" type="hidden" class="validate remove-beranda" value="">
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
