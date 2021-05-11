@extends('layout/main')

@section('title','Manajemen Akun')

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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="center-align">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $u)
                <tr id="{{ $u->id }}">
                  <td class="nama" data-nama="{{ $u->name }}">{{ $u->name }}</td>
                  <td class="email" data-email="{{ $u->email }}">{{ $u->email }}</td>
                  <td class="role" data-role="{{ $u->role }}">{{ $u->role }}</td>
                  <td class="center-align" style="width: 25%">
                    <a href="#modalEdit" class="modal-trigger waves-effect waves-light btn-small yellow darken-2" data-id="{{ $u->id }}"><span class="grey-text text-darken-4">Edit</span></a>
                    <a href="#modalRemove" class="modal-trigger waves-effect waves-light btn-small red darken-2" data-id="{{ $u->id }}">Hapus</a>
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
      <form id="formAddAkun" action="{{ route('berandaAdd') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <div class="section center-align">
              <h5>Akun</h5>
            </div>
            <div class="input-field col s12">
              <label class="add-nama" for="namaadd">Nama</label>
              <input id="namaadd" name="nama" type="text" class="validate add-nama">
            </div>
            <div class="input-field col s12">
              <label class="add-email" for="emailadd">Email</label>
              <input id="emailadd" name="email" type="email" class="validate add-email">
            </div>
            <div class="input-field col s12">
              <label class="add-password" for="passwordadd">Password</label>
              <input id="passwordadd" name="password" type="password" class="validate add-password">
            </div>
            <div class="input-field col s12">
              <select id="roleadd" name="roleadd">
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
              </select>
              <label for="roleadd">Role</label>
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
      <form id="formEditAkun" action="{{ route('berandaEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <input id="idEdit" name="id" type="hidden" class="validate edit-id" value="">
          <div class="row">
            <div class="section center-align">
              <h5>Akun</h5>
            </div>
            <div class="input-field col s12">
              <label class="edit-nama" for="namaedit">Nama</label>
              <input id="namaedit" name="nama" type="text" class="validate edit-nama">
            </div>
            <div class="input-field col s12">
              <label class="edit-email" for="emailedit">Email</label>
              <input id="emailedit" name="email" type="email" class="validate edit-email">
            </div>
            <div class="input-field col s12">
              <label class="edit-password" for="passwordedit">Password</label>
              <input id="passwordedit" name="password" type="password" class="validate edit-password">
            </div>
            <div class="input-field col s12">
              <select id="roleedit" name="roleedit">
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
              </select>
              <label for="roleedit">Role</label>
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
      <form id="formRemoveAkun" action="{{ route('berandaRemove') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="row">
            <input id="idRemove" name="id" type="hidden" class="validate remove-akun" value="">
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