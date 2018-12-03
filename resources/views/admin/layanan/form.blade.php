<div class="modal" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal" data-toggle="validator" method="post">
				{{csrf_field()}} {{ method_field('POST') }}

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times;</span></button>
					<h3 class="modal-title"></h3>
				</div>

				<div class="modal-body">
					<input type="hidden" id="id"  name="id">
					<div class="form-group">
						<label for="namaLayanan" class="col-md-3 control-label">Nama Layanan</label>
						<div class="col-md-6">
							<input id="namaLayanan" type="text" name="nama_layanan" autofocus="autofocus" placeholder="Keramas" class="form-control" maxlength="100" required="required">
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="deskripsi" class="col-md-3 control-label">Deskripsi</label>
						<div class="col-md-6">
							<textarea placeholder="Deskripsi" id="deskripsi" name="deskripsi" class="form-control" required="required" style="resize: none;" rows="3"></textarea>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="harga" class="col-md-3 control-label">Harga</label>
						<div class="col-md-6">
							<input id="harga" type="number" name="harga" autofocus="autofocus" class="form-control" maxlength="100" required="required">
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

