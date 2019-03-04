<div class="modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal" data-toggle="validator" method="post" enctype="multipart/form-data">
				{{csrf_field()}} {{ method_field('POST') }}

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times;</span></button>
					<h3 class="modal-title"></h3>
				</div>

				<div class="modal-body">
					<input type="hidden" id="id"  name="id">
					<div class="form-group">
						<label for="namaGambar" class="col-md-3 control-label">Nama Gambar</label>
						<div class="col-md-6">
							<input id="namaGambar" type="text" name="namaGambar" autofocus="autofocus" placeholder="photo" class="form-control" required="required">
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="gambar" class="col-md-3 control-label">Gambar</label>
						<div class="col-md-6">
							<input id="gambar" type="file" name="gambar">
							<span class="help-block with-errors"></span>
						</div>
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

