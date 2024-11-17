$(function() {

  //! Tombol Tambah
  $('.tambahData').on('click', function() {
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  //! Tombol Ubah
  $('.tampilModalUbah').on('click', function() {

    $('#judulModal').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/kumpulanLatihan/MVC/public//mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/kumpulanLatihan/MVC/public//mahasiswa/getubah',
      data: {id: id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        $('#id').val(data.id);
        $('#nama').val(data.nama);
        $('#npm').val(data.npm);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
      }
    })
    

  });

}); 