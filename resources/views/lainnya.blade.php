@extends('layout/main')

@section('title','Lainnya')

@section('breadcrumb')
<a href="/" class="breadcrumb">Beranda</a>
<a href="/lainnya" class="breadcrumb">Lainnya</a>
@endsection

@section('main')
<main>
  <div class="container">

    <div class="section">
      <div class="row">
        <div class="col s12 left-align"><h6>Lainnya</h6></div>
      </div>
    </div>

    <div class="row">
      <div class="col s12 left-align">
        <ul class="collapsible expandable">
          <li>
            <div class="collapsible-header">
              <!-- <a href="infografis.html" style="color:#000 !important">Infografis</a> -->
              <a href="/lainnya/infografis" class="btn-flat waves-effect waves-blue" style="width:100%;padding:0px !important;font-size: 1rem;"><i class="material-icons left">images</i>Infografis</a>
            </div>
            <!-- <div class="collapsible-body"><span>(Isi infografis)</span></div> -->
          </li>
        </ul>
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
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small btn-edit yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Informasi Umum</p>
              </div>
              <div class="collapsible-body">
                <p>BPS Kota Surabaya adalah instansi vertikal yang berada di bawah dan bertanggung jawab kepada kepala BPS Provinsi Jawa Timur. Struktur organisasi BPS Kota Surabaya sesuai dengan Peraturan Presiden Nomor 86 Tahun 2007 terdiri dari Kepala, Subbagian Tata Usaha, Seksi Statistik Sosial, Seksi Statistik Produksi, Seksi Statistik Distribusi, Seksi Neraca Wilayah dan Analisis Statistik, dan Seksi Integrasi Pengolahan dan Diseminasi Statistik.</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                <p>Visi dan Misi</p>
              </div>
              <div class="collapsible-body">
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
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                Kontak
              </div>
              <div class="collapsible-body">
                <p><a href="https://www.google.com/maps/place/Badan+Pusat+Statistik+Kota+Surabaya/@-7.3283651,112.7284813,15z/data=!4m5!3m4!1s0x0:0x6ee99db676fcc3d2!8m2!3d-7.3283651!4d112.7284813" target="_blank" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-map-marker left"></i>Jl. Ahmad Yani 152-E Surabaya 60235</a></p>
                <p><a href="tel:0318296692" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-phone left"></i>(031) 8296692</a></p>
                <p><a class="btn-flat waves-effect waves-blue"><i class="mdi mdi-fax left"></i>(031) 8296691</a></p>
                <p><a href="mailto:bps3578@bps.go.id" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-email-outline left"></i>bps3578@bps.go.id</a></p>
              </div>
            </li>
            <li>
              <div class="collapsible-header valign-wrapper">
                <a class="waves-effect waves-light btn-small yellow darken-2"><span class="grey-text text-darken-4"><i class="material-icons left">mode_edit</i>Edit</span></a>
                <p>&nbsp;&nbsp;&nbsp;</p>
                Media Sosial
              </div>
              <div class="collapsible-body">
                <p><a href="https://surabayakota.bps.go.id" target="_blank" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-web left"></i>surabayakota.bps.go.id</a></p>
                <p><a href="https://www.facebook.com/bpssurabayakota" target="_blank" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-facebook left"></i>BPS Kota Surabaya</a></p>
                <p><a href="https://instagram.com/bpskotasurabaya" target="_blank" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-instagram left"></i>@bpskotasurabaya</a></p>
                <p><a href="https://www.youtube.com/channel/UCtZ9SQ7IZv-Dd59Dgwr_TRg" target="_blank" class="btn-flat waves-effect waves-blue"><i class="mdi mdi-youtube left"></i>BPS Kota Surabaya</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Biar ngga ketutupan footer -->
    <div style="min-height: 56px"></div>

  </div>
</main>
@endsection