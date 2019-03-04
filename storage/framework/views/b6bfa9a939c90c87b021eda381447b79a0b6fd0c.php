<div class="modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" method="post">
				<?php echo e(csrf_field()); ?> <?php echo e(method_field('POST')); ?>


				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times;</span></button>
					<h3 class="modal-title"></h3>
				</div>

				<div class="modal-body">
					<input type="hidden" id="id"  name="id">
					<div class="form-group">
						<label for="namaPaket" class="col-md-3 control-label">Nama Paket</label>
						<div class="col-md-6">
							<input id="namaPaket" type="text" name="nama_paket" autofocus="autofocus" placeholder="Nama Paket" class="form-control" maxlength="100" required="required">
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="jenisLayanan" class="col-md-3 control-label">Jenis Layanan</label>
						<div class="col-md-6">
							<?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<input id="jenisLayanan" type="checkbox" value="<?php echo e($data->id_layanan); ?>" name="jenis_layanan[]"><?php echo e($data->nama_layanan); ?>

								<span class="help-block with-errors"></span>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>

					<div class="form-group">
						<label for="keterangan" class="col-md-3 control-label">Keterangan</label>
						<div class="col-md-6">
							<textarea placeholder="Keterangan" id="keterangan" name="keterangan" class="form-control" required="required" style="resize: none;" rows="3"></textarea>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="harga" class="col-md-3 control-label">Harga</label>
						<div class="col-md-6">
							<input id="harga" type="number" placeholder="Harga" name="harga" autofocus="autofocus" class="form-control" onkeypress="return hanyaAngka(event)" required="required">
							<span class="help-block with-errors"></span>
						</div>
					</div>
				</div>

				<div class="form-group">
						<label for="gambarPaket" class="col-md-3 control-label">Gambar Paket</label>
						<div class="col-md-6">
							<input id="gambar" type="file" name="gambar_paket"required="required">
							<span class="help-block with-errors"></span>
						</div>
					</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save"><i class="fa fa-floopy-o"></i>Simpan</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
				</div>
			</form>
		</div>

	</div>

</div>

