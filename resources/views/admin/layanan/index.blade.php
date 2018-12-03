@extends('admin.master.master')
@section('title')
Layanan
@endsection
@section('main')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master
        <small>Layanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Layanan</li>
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
                      <th align="center">No</th>
                      <th align="center">Nama Layanan</th>
                      <th align="center">Deskripsi</th>
                      <th align="center">Harga</th>
                      <th align="center">Pilihan</th>
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

@include('admin.layanan.form')


@endsection
@section('script')
<script type="text/javascript">
  var table, save_method;
  $(function(){

    table = $('.table').DataTable({
     "processing" : true,
     "ajax" : {
       "url" : "{{ route('layanan.data') }}",
       "type" : "GET"
     }
   });
  });

function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
  }

//menampilkan form tambah
  function addForm()
  {
    save_method = "add";
    $('input[name = method]').val('POST');
    $('#modal-form').modal('show');
    $('#modal-form form')[0].reset();
    $('.modal-title').text('Tambah Layanan');

    $('#modal-form form').validator().on('submit', function(e){
      if(!e.isDefaultPrevented()){
         
         $.ajax({
           url : "{{ route('layanan.store') }}",
           type : "POST",
           data : $('#modal-form form').serialize(),
           dataType : 'JSON',
           success : function(data){
            if(data.msg=="error")
            {
              swal({
                title: 'Maaf ...',
                text: 'Layanan sudah pernah digunakan !',
                type: 'error',
                timer: '1500'
              });  
              $('#namaLayanan').focus().select();
            }
            else
            {
              $('#modal-form').modal('hide');
              table.ajax.reload();
              swal({
                title: 'Success!',
                text: 'Layanan Berhasil di Simpan!',
                type: 'success',
                timer: '1500'
              })
            }
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
  }

  //menampilkan data di edit form
function editForm(id)
{
  save_method = "edit";
  $('input[name=_method]').val('PATCH');
  $('#modal-form form')[0].reset();
  $.ajax({
    url : "layanan/"+id+"/edit",

    type : "GET",
    dataType : "JSON",
    success : function(data){
      $('#modal-form').modal('show');
      $('.modal-title').text('Edit Layanan');

      $('#id').val(data.id);
      $('#namaLayanan').val(data.nama_layanan);
      $('#deskripsi').val(data.deskripsi);
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



  $('#modal-form form').validator().on('submit', function(e){
    if(!e.isDefaultPrevented()){
       var id = $('#id').val();
       $.ajax({
         url : "layanan/"+id,
         type : "POST",
         data : $('#modal-form form').serialize(),
         dataType : 'JSON',
         success : function(data){
           if(data.msg=="error")
            {
              swal({
                title: 'Maaf ...',
                text: 'Layanan sudah pernah digunakan !',
                type: 'error',
                timer: '1500'
              });  
              $('#namaLayanan').focus().select();
            }
            else
            {
              $('#modal-form').modal('hide');
              table.ajax.reload();
              swal({
                title: 'Success!',
                text: 'Akun Berhasil di Simpan!',
                type: 'success',
                timer: '1500'
              })
            }
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
      url :"{{ url('layanan') }}" + '/' + id,
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


</script>
@endsection
