@extends('layout/main')

@section('title','Lainnya')

@section('breadcrumb')
<a href="{{ url() }}" class="breadcrumb">Beranda</a>
<a href="{{ url('lainnya') }}" class="breadcrumb">Lainnya</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">
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

    <div class="divider"></div>

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
                <p>BPS Kota Surabaya adalah instansi vertikal yang berada di bawah dan bertanggung jawab kepada kepala BPS Provinsi Jawa Timur. Struktur organisasi BPS Kota Surabaya sesuai dengan Peraturan Presiden Nomor 86 Tahun 2007 terdiri dari Kepala, Subbagian Tata Usaha, Seksi Statistik Sosial, Seksi Statistik Produksi, Seksi Statistik Distribusi, Seksi Neraca Wilayah dan Analisis Statistik, dan Seksi Integrasi Pengolahan dan Diseminasi Statistik.</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Visi dan Misi</div>
              <div class="collapsible-body">
                <a href="#modalVisiMisi" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <h6>Visi</h6>
                <p>Pelopor data statistik terpercaya untuk semua.</p>
                <p>&nbsp</p>
                <h6>Misi</h6>
                <p>1. &nbsp Menyediakan data statistik berkualitas melalui kegiatan statistik yang terintegrasi dan berstandar nasional maupun internasional.</p>
                <p>2. &nbsp Memperkuat Sistem Statistik Nasional yang berkesinambungan melalui pembinaan dan koordinasi di bidang statistik.</p>
                <p>3. &nbsp Membangun insan statistik yang profesional, berintegritas dan amanah untuk kemajuan perstatistikan.</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Kontak</div>
              <div class="collapsible-body">
                <a href="#modalKontak" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p><i class="mdi mdi-map-marker left"></i>Jl. Ahmad Yani 152-E Surabaya 60235</p>
                <p><i class="mdi mdi-phone left"></i>(031) 8296692</p>
                <p><i class="mdi mdi-fax left"></i>(031) 8296691</p>
                <p><i class="mdi mdi-email-outline left"></i>bps3578@bps.go.id</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">Media Sosial</div>
              <div class="collapsible-body">
                <a href="#modalMedsos" class="modal-trigger waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p><i class="mdi mdi-web left"></i>surabayakota.bps.go.id</p>
                <p><i class="mdi mdi-facebook left"></i>BPS Kota Surabaya</p>
                <p><i class="mdi mdi-instagram left"></i>@bpskotasurabaya</p>
                <p><i class="mdi mdi-youtube left"></i>BPS Kota Surabaya</p>
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
    <div id="modalInfo" class="modal dismissible">
      <form action="">
        <div class="modal-content">
          <div class="row">
            <h5>Informasi Umum</h5>
            
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Informasi Umum</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <a href="#!" class="modal-close waves-effect waves-light btn-small green darken-1">Simpan</a>
        </div>
      </form>
    </div>

    {{-- Visi dan Misi Modal --}}
    <div id="modalVisiMisi" class="modal">
      <form action="">
        <div class="modal-content">
          <h5>Visi dan Misi</h5>
          
          <div class="input-field col s6">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Visi</label>
          </div>
          <div class="input-field col s6">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Misi</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <a href="#!" class="modal-close waves-effect waves-light btn-small green darken-1">Simpan</a>
        </div>
      </form>
    </div>

    {{-- Kontak --}}
    <div id="modalKontak" class="modal">
      <form action="">
        <div class="modal-content">
          <h5>Kontak</h5>
          
          <div class="input-field col s6">
            <i class="mdi mdi-map-marker prefix"></i>
            <input id="alamat" type="text" class="validate">
            <label for="alamat">Alamat</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-phone prefix"></i>
            <input id="telepon" type="text" class="validate">
            <label for="telepon">Telepon</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-fax prefix"></i>
            <input id="fax" type="text" class="validate">
            <label for="fax">Fax</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-email-outline prefix"></i>
            <input id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <a href="#!" class="modal-close waves-effect waves-light btn-small green darken-1">Simpan</a>
        </div>
      </form>
    </div>

    {{-- Medsos --}}
    <div id="modalMedsos" class="modal">
      <form action="">
        <div class="modal-content">
          <h5>Media Sosial</h5>
          
          <div class="input-field col s6">
            <i class="mdi mdi-web prefix"></i>
            <input id="website" type="text" class="validate">
            <label for="website">Website</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-facebook prefix"></i>
            <input id="facebook" type="text" class="validate">
            <label for="facebook">Facebook</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-instagram prefix"></i>
            <input id="instagram" type="text" class="validate">
            <label for="instagram">Instagram</label>
          </div>
          <div class="input-field col s6">
            <i class="mdi mdi-youtube prefix"></i>
            <input id="youtube" type="text" class="validate">
            <label for="youtube">Youtube</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-light btn-small red darken-1">Batal</a>
          <a href="#!" class="modal-close waves-effect waves-light btn-small green darken-1">Simpan</a>
        </div>
      </form>
    </div>

  </div>
</main>
@endsection