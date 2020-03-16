<div class="box">
<div class="box-header">
<div class="box-body">	
	<?php echo !empty($pesan) ? '<p>'.$pesan.'</p>':''; ?>
	<?php echo !empty($title) ? '<h2 style="color:#000;">'.$title.'</h2>':''; ?>
	<?php if (isset($bio)) { ?>
		<div class="col-sm-4">	
		<table id="example2" class="table" >
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><?php echo "<b>".$bio->id_customer."</b>"; ?></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><?php echo "<b>".$bio->nama_customer."</b>"; ?></td>
			</tr>

		</table>
		</div>
	<?php } ?>

	<div class="col-sm-12">	
		<form name="form1" method="POST" enctype="multipart/form-data">
			<div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">ID SEWA</label>
	          <div class="col-sm-10">
	            <input type="hidden" name="tids" value="<?php echo $data->id_sewa; ?>"><?php echo $data->id_sewa; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">ID MOBIL</label>
	          <div class="col-sm-10">
	            <input type="hidden" name="tidm" value="<?php echo $mobilid->id_mobil; ?>"><?php echo $data->id_mobil; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">ID KARYAWAN</label>
	          <div class="col-sm-3">
	            <input type="hidden" name="tidkar"> <?php echo $data->id_karyawan ;?>
	          </div>
	        </div>

			<div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">MERK</label>
	          <div class="col-sm-10">
	            <?php echo $mobilid->merk; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">HARGA SEWA</label>
	          <div class="col-sm-10">
	            <?php echo $data->total_bayar; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
	          <div class="col-sm-3">
	            <?php echo $data->tgl_pinjam; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">TANGGAL KEMBALI</label>
	          <div class="col-sm-3">
	            <input type="date" name="tglpu" class="form-control"><?php echo form_error('tglpu'); ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">STATUS</label>
	          <div class="col-sm-10">
	            <?php echo $data->status; ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <div class="col-sm-12" align="center">
	            <button type="submit" class="btn btn-primary btn-block" name="tombol" value="SIMPAN"><i class="fa fa-save"> SIMPAN</i></button>
	          </div>
	        </div>
			
		</form>
	</div>
</div>
</div>
</div>
