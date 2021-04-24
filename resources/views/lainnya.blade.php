@extends('layout/main')

@section('title','Lainnya')

@section('breadcrumb')
<a href="{{ url() }}" class="breadcrumb">Beranda</a>
<a href="{{ url('lainnya') }}" class="breadcrumb">Lainnya</a>
@endsection

@section('main')
<main>
  <div class="container">

    {{-- <div class="section">
      <div class="row">
        <div class="col s12 left-align"><h6>Lainnya</h6></div>
      </div>
      
      <div class="row">
        <div class="col s12 left-align">
          <ul class="collapsible expandable">
            <li>
              <div class="collapsible-header">
                <!-- <a href="infografis.html" style="color:#000 !important">Infografis</a> -->
                <a href="{{ url('lainnya/infografis') }}" class="btn-flat waves-effect waves-blue" style="width:100%;padding:0px !important;font-size: 1rem;"><i class="material-icons left">images</i>Infografis</a>
              </div>
              <!-- <div class="collapsible-body"><span>(Isi infografis)</span></div> -->
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div class="divider"></div> --}}

    <div class="section">

      <div class="row">
        <div class="col s12 left-align"><h6>Tentang BPS Surabaya</h6></div>
      </div>

      <div class="row">
        <div class="col s12 left-align">
          <ul class="collapsible expandable">
            <li>
              <div class="collapsible-header valign-wrapper">Informasi Umum</div>
              <div class="collapsible-body">
                <a href="#modalInfo" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p style="white-space: pre-wrap;">{{ $info[0]->isi }}</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Visi dan Misi</div>
              <div class="collapsible-body">
                <a href="#modalVisiMisi" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <h6>Visi</h6>
                <p style="white-space: pre-wrap;">{{ $visi[0]->isi }}</p>
                <p>&nbsp</p>
                <h6>Misi</h6>
                <p style="white-space: pre-wrap;">{{ $misi[0]->isi }}</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Kontak</div>
              <div class="collapsible-body">
                <a href="#modalKontak" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p><i class="mdi mdi-map-marker left"></i>{{ $alamat[0]->isi }}</p>
                <p><i class="mdi mdi-phone left"></i>{{ $telepon[0]->isi }}</p>
                <p><i class="mdi mdi-fax left"></i>{{ $fax[0]->isi }}</p>
                <p><i class="mdi mdi-email-outline left"></i>{{ $email[0]->isi }}</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Media Sosial</div>
              <div class="collapsible-body">
                <a href="#modalMedsos" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p><i class="mdi mdi-web left"></i>{{ $website[0]->isi }}</p>
                <p><i class="mdi mdi-facebook left"></i>{{ $facebook[0]->isi }}</p>
                <p><i class="mdi mdi-instagram left"></i>{{ $instagram[0]->isi }}</p>
                <p><i class="mdi mdi-youtube left"></i>{{ $youtube[0]->isi }}</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

    <!-- Modal Structure -->
    {{-- Informasi Umum --}}
    <div id="modalInfo" class="modal modal-fixed-footer">
      <form action="{{ route('infoUpdate') }}" method="post">
        <div class="modal-content">
          <div class="row">
            <h5>Informasi Umum</h5>
            
            <div class="input-field col s12">
              <textarea id="info" name="info" class="materialize-textarea">{{ $info[0]->isi }}</textarea>
              {{-- <label for="textarea1">Informasi Umum</label> --}}
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="{{ url('lainnya') }}" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Visi dan Misi Modal --}}
    <div id="modalVisiMisi" class="modal modal-fixed-footer">
      <form action="{{ route('visiMisiUpdate') }}" method="post">
        <div class="modal-content">
          <h5>Visi dan Misi</h5>
          <div class="input-field col s6">
            <textarea id="visi" name="visi" class="materialize-textarea">{{ $visi[0]->isi }}</textarea>
            <label for="visi">Visi</label>
          </div>
          <div class="input-field col s6">
            <textarea id="misi" name="misi" class="materialize-textarea">{{ $misi[0]->isi }}</textarea>
            <label for="misi">Misi</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="{{ url('lainnya') }}" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Kontak --}}
    <div id="modalKontak" class="modal modal-fixed-footer">
      <form action="{{ route('kontakUpdate') }}" method="POST">
        <div class="modal-content">
          <h5>Kontak</h5>
          
          <div class="input-field col s6">
            <i class="mdi mdi-map-marker prefix"></i>
            <input id="alamat" name="alamat" type="text" class="validate" value="{{ $alamat[0]->isi }}">
            <label for="alamat">Alamat</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-phone prefix"></i>
            <input id="telepon" name="telepon" type="text" class="validate" value="{{ $telepon[0]->isi }}">
            <label for="telepon">Telepon</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-fax prefix"></i>
            <input id="fax" name="fax" type="text" class="validate" value="{{ $fax[0]->isi }}">
            <label for="fax">Fax</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-email-outline prefix"></i>
            <input id="email" name="email" type="text" class="validate" value="{{ $email[0]->isi }}">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="{{ url('lainnya') }}" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

    {{-- Medsos --}}
    <div id="modalMedsos" class="modal modal-fixed-footer">
      <form action="{{ route('medsosUpdate') }}" method="POST">
        <div class="modal-content">
          <h5>Media Sosial</h5>
          
          <div class="input-field col s6">
            <i class="mdi mdi-web prefix"></i>
            <input id="website" name="website" type="text" class="validate" value="{{ $website[0]->isi }}">
            <label for="website">Website</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-facebook prefix"></i>
            <input id="facebook" name="facebook" type="text" class="validate" value="{{ $facebook[0]->isi }}">
            <label for="facebook">Facebook</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-instagram prefix"></i>
            <input id="instagram" name="instagram" type="text" class="validate" value="{{ $instagram[0]->isi }}">
            <label for="instagram">Instagram</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-youtube prefix"></i>
            <input id="youtube" name="youtube" type="text" class="validate" value="{{ $youtube[0]->isi }}">
            <label for="youtube">Youtube</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="{{ url('lainnya') }}" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <button class="btn-small waves-effect waves-light green darken-1" type="submit" name="action" style="font-family: 'Josefin Sans', sans-serif;">Simpan</button>
        </div>
      </form>
    </div>

  </div>
  <script>
    $(document).ready(function(){
      $('.modal').modal({
          dismissible: false,
          preventScrolling: false,
        }
      );
    })
  </script>
</main>
@endsection