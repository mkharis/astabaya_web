$(document).ready(function(){
    M.AutoInit();

    $(".modal").modal({
        dismissible: false,
        preventScrolling: false,
        }
    );

    $("#listInfografi").on("click", ".modal-trigger", function() {
        var infografis_id = $(this).data("id");
        var judul = $(this).parents("#" + infografis_id).children(".judul").data("judul");
        var link = $(this).parents("#" + infografis_id).children(".link").data("link");
        
        if(infografis_id) {
            // Fill Infografis Id
            // For Edit
            $("input#id.validate.edit-infografis").val(infografis_id);
            // For Remove
            $("input#id.validate.remove-infografis").val(infografis_id);
            // Fill Infografis Judul
            $("input#judul_edit.validate.edit-infografis").val(judul);
            $("label#judul_edit.edit-infografis", function() {
                M.updateTextFields();
            });
            // Fill Infografis Link
            $("input#link_edit.validate.edit-infografis").val(link);
            $("label#link_edit.edit-infografis", function() {
                M.updateTextFields();
            });
        }
    })

    $("#listKategori").on("click", ".modal-trigger", function() {
        var kategori_id = $(this).data("id");
        var kategori = $(this).parents("#" + kategori_id).children(".kategori").data("kategori");

        if(kategori_id) {
            // Fill Kategori Id
            // For Edit
            $("input#id.validate.edit-kategori").val(kategori_id);
            // For Remove
            $("input#id.validate.remove-kategori").val(kategori_id);
            // Fill Kategori Name
            $("input#kategori.validate.edit-kategori").val(kategori);
            $("label#kategori.edit-kategori", function() {
                M.updateTextFields();
            });
        }
    })

    $("#listSubKategori").on("click", ".modal-trigger", function() {
      var subKategori_id = $(this).data("id");
      var kategori_id = $(this).parents("#" + subKategori_id).children(".kategori").data("kategori-id");
      var kategori = $(this).parents("#" + subKategori_id).children(".kategori").data("kategori");
      var subKategori = $(this).parents("#" + subKategori_id).children(".subKategori").data("sub-kategori");
      var konsep = $(this).parents("#" + subKategori_id).children(".konsep").data("konsep");
      
      if(subKategori_id) {
          // Fill Kategori Id
          // For Edit
          $("input#idSub.validate.edit-sub-kategori").val(subKategori_id);
          // Fill Kategori
          $("select#selectKategori option[value='"+kategori_id+"']").attr("selected", true);
          $("input.select-dropdown.dropdown-trigger").val(kategori);
          // For Remove
          $("input#id.validate.remove-sub-kategori").val(subKategori_id);
          // Fill Sub Kategori Name
          $("input#subKategori.validate.edit-subKategori").val(subKategori);
          $("textarea#konsep_edit.validate.edit-konsep_edit").val(konsep);
          M.textareaAutoResize($("textarea#konsep_edit.validate.edit-konsep_edit"));
          $("label#subKategori.edit-subKategori", function() {
              M.updateTextFields();
          });
      }
    })

    $("#listDataTabel").on("click", ".modal-trigger", function() {
      var tabel_id = $(this).data("id");
      var judul = $(this).parents("#" + tabel_id).children(".tabel").data("tabel");
      var link = $(this).parents("#" + tabel_id).children(".link").data("link");

      if(tabel_id){
        // Fill Data Tabel Id
        // For Edit
        $("input#idedittabel.validate.edit-id").val(tabel_id);
        // For Remove
        $("input#idremovetabel.validate.remove-id").val(tabel_id);
        // Fill Data Judul
        $("input#tabeledit.validate.edit-tabel").val(judul);
        $("label.edit-tabel", function() {
            M.updateTextFields();
        });
        // Fill Data Link
        $("input#linkedit.validate.edit-link").val(link);
        $("label.edit-link", function() {
            M.updateTextFields();
        });
      }
    })

    $("#listDataBeranda").on("click", ".modal-trigger", function() {
      var beranda_id = $(this).data("id");
      var ikon = $(this).parents("#" + beranda_id).children(".ikon").data("ikon");
      var judul = $(this).parents("#" + beranda_id).children(".judul").data("judul");
      var isi = $(this).parents("#" + beranda_id).children(".isi").data("isi");
      var satuan = $(this).parents("#" + beranda_id).children(".satuan").data("satuan");
      var deskripsi = $(this).parents("#" + beranda_id).children(".deskripsi").data("deskripsi");

      if(beranda_id){
        // Fill Data Beranda Id
        // For Edit
        $("input#idEdit.validate.edit-id").val(beranda_id);
        // For Remove
        $("input#idRemove.validate.remove-beranda").val(beranda_id);
        // Fill Data Ikon
        $("input#ikonedit.validate.edit-ikon").val(ikon);
        $("label#ikonedit.edit-ikon", function() {
            M.updateTextFields();
        });
        // Fill Data Judul
        $("input#juduledit.validate.edit-judul").val(judul);
        $("label#juduledit.edit-judul", function() {
            M.updateTextFields();
        });
        // Fill Data Nilai
        $("input#isiedit.validate.edit-isi").val(isi);
        $("label#isiedit.edit-isi", function() {
            M.updateTextFields();
        });
        // Fill Data Satuan
        $("input#satuanedit.validate.edit-satuan").val(satuan);
        $("label#satuanedit.edit-satuan", function() {
            M.updateTextFields();
        });
        // Fill Data Deskripsi
        $("textarea#deskripsiedit.validate.edit-deskripsi").val(deskripsi);
        M.textareaAutoResize($("textarea#deskripsiedit.validate.edit-deskripsi"));
        $("label#deskripsiedit.edit-deskripsi", function() {
            M.updateTextFields();
        });
      }
    })

    $(".tambah-content").on("click", function() {
      let formData = {
        tabel_id: $(this).data("id"),
        sub_kategori_id: $("#idsubkategori").val()
      }
      $.post(url.slice(0,url.indexOf("public")) + "public/tabel/content/add?token=" + window.token, formData)
      .done(function(){
        M.toast({html: "Isi tabel berhasil ditambahkan"});
        window.location.reload();
      });
    })

    $(".hapus-content").on("click", function() {
      let formData = {
        tabel_id: $(this).data("id"),
        sub_kategori_id: $("#idsubkategori").val()
      }
      console.log(formData);
      $.post(url.slice(0,url.indexOf("public")) + "public/tabel/content/remove?token=" + window.token, formData)
      .done(function(){
        M.toast({html: "Isi tabel berhasil dihapus"});
        window.location.reload();
      });
    })

  })

let url = window.location.href;
let splited_url = url.split("?token=");
window.token = splited_url[1];

$("a").click(function(event) {
  event.preventDefault();
  let url = $(this).attr("href");
  if (url) {
    window.location.href = url + "?token=" + window.token;
  }
});

function logout() {
  let url = window.location.pathname;
  $.post(url.slice(0,url.indexOf("public")) + "public/auth/logout?token=" + window.token)
  .done(function (data) {
    M.toast({html: data.message});
    window.location.href = url.slice(0,url.indexOf("public")) + "public/?token=" + window.token
  })
  .fail(function(error){
    console.log(error);
  });
}


// UNTUK KEPERLUAN CRUD DATA
// BERANDA
// Create
$("#formAddBeranda").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    ikon: $("#ikonadd").val(),
    judul: $("#juduladd").val(),
    isi: $("#isiadd").val(),
    satuan: $("#satuanadd").val(),
    deskripsi: $("#deskripsiadd").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Data berhasil ditambahkan"});
      window.location.reload();
    });
});

// Edit
$("#formEditBeranda").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idEdit").val(),
    ikon: $("#ikonedit").val(),
    judul: $("#juduledit").val(),
    isi: $("#isiedit").val(),
    satuan: $("#satuanedit").val(),
    deskripsi: $("#deskripsiedit").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Data berhasil diperbaruhi"});
      window.location.reload();
    });
});

// Delete
$("#formRemoveBeranda").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idRemove").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Data berhasil dihapus"});
      window.location.reload();
    });
});

//  KATEGORI
// Create
$("#formAddKategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    kategori: $("#kategoriadd").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Kategori berhasil ditambahkan"});
      window.location.reload();
    });
});

// Edit
$("#formEditKategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#id").val(),
    kategori: $("#kategori").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Kategori berhasil diperbaruhi"});
      window.location.reload();
    });
});

// Delete
$("#formRemoveKategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#id").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Kategori berhasil dihapus"});
      window.location.reload();
    });
});

// SUBKATEGORI
// Create
$("#formAddSubkategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    sub_kategori: $("#sub_kategori").val(),
    link: null,
    konsep_tambah: $("#konsep_tambah").val(),
    kategori_id: $("#kategori_id").find(":selected").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/addSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Sub Kategori berhasil ditambahkan"});
      window.location.reload();
    });
});

// Edit
$("#formEditSubkategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idSub").val(),
    kategori_id: $("#selectKategori").find(":selected").val(),
    subKategori: $("#subKategori").val(),
    konsep_edit: $("#konsep_edit").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/editSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Sub Kategori berhasil diperbaruhi"});
      window.location.reload();
    });
});

// Delete
$("#formRemoveSubkategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idSub").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/kategori/removeSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Kategori berhasil dihapus"});
      window.location.reload();
    });
});

//  TABEL
// Create
$("#formAddTabel").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    tabel: $("#tabeladd").val(),
    link: $("#linkadd").val(),
    sub_kategori_id: $("#idsubkategori").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/tabel/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Tabel berhasil ditambahkan"});
      window.location.reload();
    });
});

// Edit
$("#formEditTabel").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idedittabel").val(),
    tabel: $("#tabeledit").val(),
    link: $("#linkedit").val(),
    sub_kategori_id: $("#idsubkategori").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/tabel/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Tabel berhasil diperbaruhi"});
      window.location.reload();
    });
});

// Delete
$("#formRemoveTabel").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#idremovetabel").val(),
    sub_kategori_id: $("#idsubkategori").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/tabel/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Tabel berhasil dihapus"});
      window.location.reload();
    });
});

// INFOGRAFIS
// Create
$("#formAddInfografis").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    judul: $("#judul_add").val(),
    link: $("#link_add").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/infografis/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Infografis berhasil ditambahkan"});
      window.location.reload();
    });
});

// Edit
$("#formEditInfografis").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#id").val(),
    judul: $("#judul_edit").val(),
    link: $("#link_edit").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/infografis/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Infografis berhasil diperbaruhi"});
      window.location.reload();
    });
});

// Delete
$("#formRemoveInfografis").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    id: $("#id").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/infografis/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Infografis berhasil dihapus"});
      window.location.reload();
    });
});

// LAINNYA
// INFORMASI UMUM
$("#formInfo").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    info: $("#info").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/lainnya/updateInfo?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Informasi Umum berhasil diperbaruhi"});
      window.location.reload();
    });
});

// VISI & MISI
$("#formVisiMisi").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    visi: $("#visi").val(),
    misi: $("#misi").val()
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/lainnya/updateVisiMisi?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Visi & Misi berhasil diperbaruhi"});
      window.location.reload();
    });
});

// KONTAK
$("#formKontak").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    alamat: $("#alamat").val(),
    telepon: $("#telepon").val(),
    fax: $("#fax").val(),
    email: $("#email").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/lainnya/updateKontak?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Kontak berhasil diperbaruhi"});
      window.location.reload();
    });
});

// MEDIA SOSIAL
$("#formMedsos").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    website: $("#website").val(),
    facebook: $("#facebook").val(),
    instagram: $("#instagram").val(),
    youtube: $("#youtube").val(),
  }
  $.post(url.slice(0,url.indexOf("public")) + "public/lainnya/updateMedsos?token=" + window.token, formData)
    .done(function(){
      M.toast({html: "Media Sosial berhasil diperbaruhi"});
      window.location.reload();
    });
});
