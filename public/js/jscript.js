$(document).ready(function(){
    M.AutoInit();

    $('.modal').modal({
        dismissible: false,
        preventScrolling: false,
        }
    );

    $('#listInfografi').on('click', '.modal-trigger', function() {
        var infografis_id = $(this).data('id');
        var judul = $(this).parents('#' + infografis_id).children('.judul').data('judul');
        var link = $(this).parents('#' + infografis_id).children('.link').data('link');
        
        if(infografis_id) {
            // Fill Infografis Id
            // For Edit
            $('input#id.validate.edit-infografis').val(infografis_id);
            // For Remove
            $('input#id.validate.remove-infografis').val(infografis_id);
            // Fill Infografis Judul
            $('input#judul_edit.validate.edit-infografis').val(judul);
            $('label#judul_edit.edit-infografis', function() {
                M.updateTextFields();
            });
            // Fill Infografis Link
            $('input#link_edit.validate.edit-infografis').val(link);
            $('label#link_edit.edit-infografis', function() {
                M.updateTextFields();
            });
        }
    })

    $('#listKategori').on('click', '.modal-trigger', function() {
        var kategori_id = $(this).data('id');
        var kategori = $(this).parents('#' + kategori_id).children('.kategori').data('kategori');

        if(kategori_id) {
            // Fill Kategori Id
            // For Edit
            $('input#id.validate.edit-kategori').val(kategori_id);
            // For Remove
            $('input#id.validate.remove-kategori').val(kategori_id);
            // Fill Kategori Name
            $('input#kategori.validate.edit-kategori').val(kategori);
            $('label#kategori.edit-kategori', function() {
                M.updateTextFields();
            });
        }
    })

    $('#listSubKategori').on('click', '.modal-trigger', function() {
      var subKategori_id = $(this).data('id');
      var kategori_id = $(this).parents('#' + subKategori_id).children('.kategori').data('kategori-id');
      var kategori = $(this).parents('#' + subKategori_id).children('.kategori').data('kategori');
      var subKategori = $(this).parents('#' + subKategori_id).children('.subKategori').data('sub-kategori');
      
      if(subKategori_id) {
          // Fill Kategori Id
          // For Edit
          $('input#idSub.validate.edit-sub-kategori').val(subKategori_id);
          // Fill Kategori
          $("select#selectKategori option[value='"+kategori_id+"']").attr('selected', true);
          $("input.select-dropdown.dropdown-trigger").val(kategori);
          // For Remove
          $('input#id.validate.remove-sub-kategori').val(subKategori_id);
          // Fill Sub Kategori Name
          $('input#subKategori.validate.edit-subKategori').val(subKategori);
          $('label#subKategori.edit-subKategori', function() {
              M.updateTextFields();
          });
      }
  })

  })

let url = window.location.href;
let splited_url = url.split('?token=');
window.token = splited_url[1];

$('a').click(function(event) {
  event.preventDefault();
  let url = $(this).attr('href');
  if (url) {
    window.location.href = url + "?token=" + window.token;
  }
});

function logout() {
  let url = window.location.pathname;
  $.post(url.slice(0,url.indexOf('public')) + 'public/auth/logout?token=' + window.token)
  .done(function (data) {
    M.toast({html: data.message});
    window.location.href = url.slice(0,url.indexOf('public')) + 'public/?token=' + window.token
  })
  .fail(function(error){
    console.log(error);
  });
}


// UNTUK KEPERLUAN CRUD DATA

//  KATEGORI
// Create
$("#formAddKategori").submit(function(event){
  event.preventDefault();
  let url = window.location.pathname;
  let formData = {
    kategori: $("#kategoriadd").val()
  }
  $.post(url.slice(0,url.indexOf('public')) + "public/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Kategori berhasil ditambahkan'});
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
  $.post(url.slice(0,url.indexOf('public')) + "public/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Kategori berhasil diperbaruhi'});
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
  $.post(url.slice(0,url.indexOf('public')) + "public/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Kategori berhasil dihapus'});
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
    link: "null",
    kategori_id: $("#kategori_id").find(":selected").val()
  }
  console.log(formData);
  $.post(url.slice(0,url.indexOf('public')) + "public/addSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Sub Kategori berhasil ditambahkan'});
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
  }
  $.post(url.slice(0,url.indexOf('public')) + "public/editSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Sub Kategori berhasil diperbaruhi'});
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
  $.post(url.slice(0,url.indexOf('public')) + "public/removeSub?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Kategori berhasil dihapus'});
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
    link: $('#link_add').val(),
  }
  // console.log(formData);
  $.post(url.slice(0,url.indexOf('public')) + "public/infografis/add?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Infografis berhasil ditambahkan'});
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
    link: $('#link_edit').val(),
  }
  // console.log(formData);
  $.post(url.slice(0,url.indexOf('public')) + "public/infografis/edit?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Infografis berhasil diperbaruhi'});
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
  // console.log(formData);
  $.post(url.slice(0,url.indexOf('public')) + "public/infografis/remove?token=" + window.token, formData)
    .done(function(){
      M.toast({html: 'Infografis berhasil dihapus'});
      window.location.reload();
    });
});