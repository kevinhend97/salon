
<?php $__env->startSection('title'); ?>
Paket
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master
        <small>Paket</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Paket</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i>Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Paket</th>
                      <th class="text-center">Gambar</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Harga</th>
                      <th class="text-center">Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              
            </div>
          </div>
        </div>
      </div>
    </section>

<?php echo $__env->make('admin.paket.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  var table, save_method;
  $(function(){

    table = $('.table').DataTable({
     "processing" : true,
     "ajax" : {
       "url" : "<?php echo e(route('paket.data')); ?>",
       "type" : "GET"
     }
   });
  });


  $('#modal-form form').validator().on('submit', function(e){
    if(!e.isDefaultPrevented()){
      var id = $('#id').val();
      if(save_method == "add") url = "<?php echo e(route('paket.store')); ?>";
      else url = "paket/"+id;
         
      $.ajax({
        url : url,
        type : "POST",
        data : new FormData($('#modal-form form')[0]),
        dataType : 'JSON',
        async : false,
        processData : false,
        contentType : false,
        success : function(data){
          $('#modal-form').modal('hide');
          table.ajax.reload();
          swal({
            title: 'Berhasil!',
            text: 'Data Berhasil di Buat!',
            type: 'success',
            timer: '1500'
          })
        },
        error : function(){
          swal({
            title: 'Oops...',
            text: 'Ada yang Error!',
            type: 'error',
            timer: '1500'
          })
        }   
      });
      return false;
    }
  });

//menampilkan form tambah
  function addForm()
  {
    save_method = "add";
    $('input[name = method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('.modal-title').text('Tambah Paket');
  }

  

  //menampilkan data di edit form
function editForm(id)
{
  save_method = "edit";
  $('input[name=_method]').val('PATCH');
  $('#modal-form form')[0].reset();
  $.ajax({
    url : "paket/"+id+"/edit",
    type : "GET",
    dataType : "JSON",
    success : function(data){
      $('#modal-form').modal('show');
      $('.modal-title').text('Edit Paket');

      $('#id').val(data.id_paket);
      $('#namaPaket').val(data.nama_paket);
      $('#keterangan').val(data.keterangan);
      $('#harga').val(data.harga);
    },
    error : function(){
      swal({
            title: 'Oops...',
            text: 'Tidak dapat menampilkan data!',
            type: 'error',
            timer: '1500'
          })
    }
  });
}


function deleteData(id){
  var csrf_token = $('meta[name="csrf-token"]').attr('content');
  swal({
    title: 'Yakin hapus data ini ?',
    text: "Kamu tidak dapat mengembalikan data ini!",
    type: 'warning',
    showCancelButton: true,
    cancelButtonColor: '#d33',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'Ya, Hapus data Tersebut!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
      url :"<?php echo e(url('paket')); ?>" + '/' + id,
      type : "POST",
      data : {'_method' : 'DELETE', '_token' : csrf_token},
      success : function(data)
      {
        table.ajax.reload();
        swal({
            title: 'Berhasil!',
            text: 'Data Berhasil di Hapus!',
            type: 'success',
            timer: '1500'
          })
      },
      error : function()
      {
        swal({
            title: 'Oops...',
            text: 'Tidak dapat menghapus data!',
            type: 'error',
            timer: '1500'
          })
        }      
      });
    }
  });
}

// Script Tambahan
function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
  }


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>