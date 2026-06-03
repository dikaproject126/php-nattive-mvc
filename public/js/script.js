$(function() {

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html("Tambah Data Mahasiswa");
        $('.modal-footer button[type=submit]')
            .html('Tambah Data')
            .removeClass('btn-warning')
            .addClass('btn-primary');
    });

    $('.tampilModalUbah').on('click', function(){

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]')
            .html('Ubah Data')
            .removeClass('btn-primary')
            .addClass('btn-warning');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/php-nattive-mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            // dataType: 'json',
            success: function(data){
                console.log(data);
            }
        });
    });

});