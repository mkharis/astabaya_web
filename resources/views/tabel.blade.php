@extends('layout/main')

@section('title','Kategori')

@section('breadcrumb')
<a href="{{ url('tabel').'/'.$tabel[0]->id }}" class="breadcrumb">{{ $tabel[0]->sub_kategori }}</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col s12 left-align">
            <div class="section">
                <h6>{{ $tabel[0]->sub_kategori }}</h6>
            </div>
            <a href="#modalAddSubkategori" class="modal-trigger waves-effect waves-light btn-small blue darken-2 btn-edit"><i class="material-icons left">add</i>Tambah</a>
        </div>

        <div class="col s12 left-align">
          <table class="highlight">
            <thead>
              <tr>
                  <th>Tabel</th>
                  <th class="center-align">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tabel as $tb)
              <tr>
                <td>{{ $tb->tabel }}</td>
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

  </div>
</main>
@endsection