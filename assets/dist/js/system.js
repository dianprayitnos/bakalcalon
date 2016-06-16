$(document).ready(function() {
    
    
    
    $("#simpan_reward").click(function()
    {
        var id          = $('#id_pengguna').val();
        var reward      = $('#reward').val();
        var deskripsi   = $('#deskripsi').val();            

        $.ajax({
            
                type:'POST',                
                url : "http://localhost/km/index.php/reward/reward/tambah",
                data:{'id':id,'reward':reward,'deskripsi' : deskripsi},
                success:function(data)
                {                    
                    alert("Reward Berhasil Ditambahkan");
                    window.location.href="http://localhost/km/index.php/reward/reward";
                },
                error:function()
                {
                    alert("error");
                }               

        });
    });


     $('#idTourDateDetails').datepicker({
     dateFormat: 'dd-mm-yy',
     minDate: '+5d',
     changeMonth: true,
     changeYear: true,
     altField: "#idTourDateDetailsHidden",
     altFormat: "yy-mm-dd"
      });

    
     $("#tambahKomentar" ).click(function() {      
      var id = $('#id').val();
      var komentar = $('#komentar').val();

         $.ajax({
                type:'POST',                
                url : "http://localhost/km/index.php/komentarTacit/tambah_komentar",
                data:{'id':id,'komentar':komentar},
                success:function(data){
                    alert("Komentar Berhasil Ditambahkan");
                    document.getElementById("komentar").value = "";                                                            
                },
                error:function()
                {
                    alert("error");
                },
                complete: function (data) {
                    showKomentar(); 
                }

            });    
         showKomentar();
    });


     $("#tambahKomentarEksplisit" ).click(function() {      
      var id = $('#id').val();    
      var komentar = $('#komentar').val();
      alert(komentar);

         $.ajax({
                type:'POST',                
                url : "http://localhost/km/index.php/komentar_eksplisit/tambah_komentar",
                data:{'id':id,'komentar':komentar},
                success:function(data){
                    alert("Komentar Berhasil Ditambahkan");
                    document.getElementById("komentar").value = "";                                                            
                },
                error:function()
                {
                    alert("error");
                },
                complete: function (data) {
                    showKomentarEksplisit(); 
                }

            });    
         showKomentarEksplisit();
    });

     
     $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var nama = button.data('nama')
      // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Reward Diberikan Kepada ' + nama)
      modal.find('.modal-body input').val(id)
    })

     showKomentar();
     showKomentarEksplisit();


    $("#tanggal_komentar").datepicker();    
    $("#tgl_input").datepicker();
    $("#tgl_lahir").datepicker();

    $("#tgl_selesai").datepicker();
    $("#tanggal_maju").datepicker();
    $("#tgl_masuk").datepicker();
    $("#tanggal").datepicker();
    
  $("#jadwalPemakaian0").datepicker();
  $("#jadwalPemakaian1").datepicker();
  $("#jadwalPemakaian2").datepicker();
  $("#jadwalPemakaian3").datepicker();
  $("#jadwalPemakaian4").datepicker();
  $("#jadwalPemakaian5").datepicker();
  $("#jadwalPemakaian6").datepicker();
  $("#jadwalPemakaian7").datepicker();
  $("#jadwalPemakaian8").datepicker();
  $("#jadwalPemakaian9").datepicker();

  $("#table_status_persediaan").DataTable();
  $("#persediaan_keluar").DataTable();
  
  $('#reservation').daterangepicker();
    
    });



    function showKomentar()
    {
        var id = $('#id_tacit').val();
        $.ajax({
                type: "post",
                url : "http://localhost/km/index.php/komentarTacit/lihat",
                data : {'id':id},
                dataType: "html",   //expect html to be returned                
                success: function(response){                    
                    $("#responsecontainer").html(response);                     

                }
               });                
    }    

    function showKomentarEksplisit()
    {
        var id = $('#id_eksplisit').val();        
        $.ajax({
                type: "post",
                url : "http://localhost/km/index.php/Komentar_eksplisit/lihat",
                data : {'id':id},
                dataType: "html",   //expect html to be returned                
                success: function(response){                     
                    $("#response_eksplisit").html(response);                     

                }
               });                
    }    

