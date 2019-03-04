<?php $__env->startSection('title'); ?>
Dashboard Salon Violet
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <h1>Hey Tayo</h1>
      </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>