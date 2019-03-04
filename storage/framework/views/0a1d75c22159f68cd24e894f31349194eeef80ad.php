<?php $__env->startSection('title'); ?>
<?php if($data->id == Auth::user()->id): ?> 
<?php echo e($data->username); ?> 
<?php else: ?>
ERROR !!!
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<section class="content-header">
  <h1>
    Data Master
    <small>Profile</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href=""></a>Pegawai</li>
    <li class="active"><?php echo e($data->username); ?></li>
  </ol>
</section>
<section class="content">
  <div class="row">

    <div class="col-md-12">
       <?php if(session('alert')): ?>
         <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Notification</h4>
            <?php echo e(session('alert')); ?>

          </div>
        <?php endif; ?>
      <div class="box box-primary">
        <?php if($data->id == Auth::user()->id): ?>
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Profile</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            
        <form role="form" enctype="multipart/form-data" action="<?php echo e(route('profile.update_data', Auth::user()->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" value="<?php echo e($data->name); ?>" name="name" placeholder="Name" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('name')); ?></strong></span>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">E-mail</label>
              <input type="text" value="<?php echo e($data->email); ?>" name="email" placeholder="E-mail" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('email')); ?></strong></span>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">No. Telp</label>
              <input type="text" value="<?php echo e($data->no_telp); ?>" onkeypress="return hanyaAngka(event)" name="no_telp" placeholder="no.Telp" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('no_telp')); ?></strong></span>
            </div>
            <hr>
            <div class="form-group">
              <label for="exampleInputEmail1">Password Lama</label>
              <input type="password" name="current_password" placeholder="Password Lama" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('current_password')); ?></strong></span>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password Baru</label>
               <input type="password" name="password" placeholder="Password Baru" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('password')); ?></strong></span>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Konfirmasi Password</label>
              <input type="password" name="confirm_password" placeholder="Konfirmasi password Baru" class="form-control">
              <span class="text-danger"><strong><?php echo e($errors->first('confirm_password ')); ?></strong></span>
            </div>
            <hr>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" name="avatar">
              <p class="help-block">Masukan Gambar atau Foto disini</p>
            </div>
          </div>
          <!-- /.box-body -->
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      <?php else: ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Warning !!!</h4>
            Maaf, anda hanya bisa mengakses Data Tersebut !
        </div>
      <?php endif; ?>
      <!-- /.box primary -->
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>