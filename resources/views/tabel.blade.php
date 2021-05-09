@extends('layout/main')

@section('title','Tabel')

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
            <div class="section">
                <h6>{{ $tabel[0]->sub_kategori }}</h6>
                <input id="idsubkategori" name="idsubkategori" type="hidden" value="{{ $tabel[0]->sub_kategori_id }}">
            </div>
            <a href="#modalAdd" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="row">
          <div class="col s12 left-align">
            <table class="highlight" id="listDataTabel">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Link</th>
                  <th class="center-align">Action</th>
                  <th class="center-align">Content</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tabel as $t)
                <tr id="{{ $t->id }}">
                  <td class="tabel" data-tabel="{{ $t->tabel }}">{{ $t->tabel }}</td>
                  <td class="link" data-link="{{ $t->link }}">{{ $t->link }}</td>
                  <td class="center-align">
                    <a href="#modalEdit" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $t->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                    <a href="#modalRemove" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $t->id }}">Hapus</a>
                  </td>
                  <td class="center-align">
                    <a class="waves-effect waves-light btn-small green darken-2 tambah-content" data-id="{{ $t->id }}">Tambah</a>
                    <a class="waves-effect waves-light btn-small black darken-2 hapus-content" data-id="{{ $t->id }}">Hapus</a>
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
      <form id="formAddTabel" action="{{ route('tabelAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="input-field col s12">
              <label class="add-tabel" for="tabeladd">Judul</label>
              <input id="tabeladd" name="tabel" type="text" class="validate add-tabel">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="add-link" for="linkadd">Link</label>
              <input id="linkadd" name="link" type="text" class="validate add-link">
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
      <form id="formEditTabel" action="{{ route('tabelEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <input id="idedittabel" name="id" type="hidden" class="validate edit-id" value="">
          <div class="row">
            <div class="input-field col s12">
              <label class="edit-tabel" for="tabeledit">Judul</label>
              <input id="tabeledit" name="tabel" type="text" class="validate edit-tabel">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label class="edit-link" for="linkedit">Link</label>
              <input id="linkedit" name="link" type="text" class="validate edit-link">
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
      <form id="formRemoveTabel" action="{{ route('tabelRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="idremovetabel" name="id" type="hidden" class="validate remove-id" value="">
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
