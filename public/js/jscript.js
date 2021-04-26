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
        console.log(kategori_id);
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
})