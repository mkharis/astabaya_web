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
        
        if(infografis_id) {
            // Fill Infografis Id
            // For Edit
            $('input#id.validate.edit-infografis').val(infografis_id);
            // For Remove
            $('input#id.validate.remove-infografis').val(infografis_id);
            // Fill Infografis Judul
            $('input#judul.validate.edit-infografis').val(judul);
            $('label#judul.edit-infografis', function() {
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
          $('input#id.validate.edit-sub-kategori').val(subKategori_id);
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