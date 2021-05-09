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
          <div class="section">
            <h6>Kategori</h6>
          </div>
          <a href="#modalAddKategori" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="row">
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
      </div>

      <div class="row">
        <div class="col s12 left-align">
          <div class="section">
            <h6>Sub Kategori</h6>
          </div>
          <a href="#modalAddSubkategori" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="col s12 left-align">
          <table class="highlight" id="listSubKategori">
            <thead>
              <tr>
                  <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subkategori as $sk)
              <tr id="{{ $sk->id }}">
                <td class="kategori" data-kategori-id="{{ $sk->kategori_id }}" data-kategori="{{ $sk->kategori }}">{{ $sk->kategori }}</td>
                @if ($sk->kategori_id == '3')
                <td class="subKategori" data-sub-kategori="{{ $sk->sub_kategori }}"><a href="#" class="waves-effect waves-light btn-small teal darken-3">{{ $sk->sub_kategori }}</a></td>  
               
                @elseif ($sk->kategori_id == '2')
                <td class="subKategori" data-sub-kategori="{{ $sk->sub_kategori }}"><a href="#" class="waves-effect waves-light btn-small orange darken-3">{{ $sk->sub_kategori }}</a></td>  
                
                @elseif ($sk->kategori_id == '1')
                <td class="subKategori" data-sub-kategori="{{ $sk->sub_kategori }}"><a href="#" class="waves-effect waves-light btn-small blue darken-3">{{ $sk->sub_kategori }}</a></td>  
                
                @else
                <td class="subKategori" data-sub-kategori="{{ $sk->sub_kategori }}"><a href="#" class="waves-effect waves-light btn-small lime darken-3">{{ $sk->sub_kategori }}</a></td>  
                @endif
                <td class="konsep" data-konsep="{{ $sk->konsep }}" hidden></td>
                <td class="center-align">
                  <a href="#modalEditSubkategori" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $sk->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                  <a href="#modalRemoveSubKategori" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $sk->id }}">Hapus</a>
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
      <form id="formAddKategori" action="{{ route('kategoriAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Kategori</h5>
            </div>
            <div class="input-field">
              <label class="edit-kategori" for="kategoriadd">Kategori</label>
              <input id="kategoriadd" name="kategori" type="text" class="validate edit-kategori">
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
      <form id="formEditKategori" action="{{ route('kategoriEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Kategori</h5>
            </div>
            <input id="id" name="id" type="hidden" class="validate edit-kategori" value="">
            <div class="input-field">
              <input id="kategori" name="kategori" type="text" class="validate edit-kategori">
              <label class="edit-kategori" for="kategori">Kategori</label>
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
      <form id="formRemoveKategori" action="{{ route('kategoriRemove') }}" method="POST" enctype="multipart/form-data">
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

    {{-- Add Sub Kategori --}}
    <div id="modalAddSubkategori" class="modal modal-fixed-footer">
      <form id="formAddSubkategori" action="{{ route('subKategoriAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Sub Kategori</h5>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <select id="kategori_id" name="kategori_id">
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                @endforeach
              </select>
              <label>Kategori</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <label class="edit-sub_kategori" for="sub_kategori">Sub Kategori</label>
              <input id="sub_kategori" name="sub_kategori" type="text" class="validate edit-sub_kategori">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <label class="edit-konsep_tambah" for="konsep_tambah">Konsep</label>
              <textarea id="konsep_tambah" name="konsep_tambah" type="text" class="validate edit-konsep_tambah materialize-textarea"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Edit Sub Kategori --}}
    <div id="modalEditSubkategori" class="modal modal-fixed-footer">
      <form id="formEditSubkategori" action="{{ route('subKategoriEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Sub Kategori</h5>
            </div>
          </div>
          <input id="idSub" name="id" type="hidden" class="validate edit-sub-kategori" value="">
          <div class="row">
            <div class="input-field">
              <select name="kategori_id" id="selectKategori">
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                @endforeach
              </select>
              <label>Kategori</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <label class="edit-sub-kategori" for="subKategori">Sub Kategori</label>
              <input id="subKategori" name="subKategori" type="text" class="validate edit-subKategori">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <label class="edit-konsep_edit" for="konsep_edit">Konsep</label>
              <textarea id="konsep_edit" name="konsep_edit" type="text" class="validate edit-konsep_edit materialize-textarea"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Remove Sub Kategori --}}
    <div id="modalRemoveSubKategori" class="modal">
      <form id="formRemoveSubkategori" action="{{ route('subKategoriRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="idSub" name="id" type="hidden" class="validate remove-sub-kategori" value="">
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
