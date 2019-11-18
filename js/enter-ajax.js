$(document).ready(function(){
  $("#keyword").keypress(function(event){ // Ketika tombol simpan di klik
    if (event.keyCode === 13) {
    // Ubah text tombol search menjadi SEARCHING... 
    // Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
    $("#btn-search").html("SEARCHING...").attr("disabled", "disabled");
    };
    
    $.ajax({
      url: 'search.php', // File tujuan
      type: 'POST', // Tentukan type
      data: {keyword: $("#keyword").val()}, // Set data yang akan dikirim
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ // Ketika proses pengiriman berhasil
        // Ubah kembali text button search menjadi SEARCH
        // Dan hapus atribut disabled untuk meng-enable kembali button search nya
        $("#btn-search").html("SEARCH").removeAttr("disabled");
        
        // Ganti isi dari div view dengan view yang diambil dari search.php
        $("#view").html(response.hasil);
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
        alert(xhr.responseText); // munculkan alert
      }
    });
  });
});