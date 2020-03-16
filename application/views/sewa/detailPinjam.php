<div class="box">
<div class="box-header">
<div class="box-body">	
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
	            <input type="text" class="form-control" name="tids" value="<?php echo $id_sewa; ?>" readonly>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">ID MOBIL</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="tidm" value="<?php echo $detail->id_mobil; ?>" readonly><?php echo form_error('tidm') ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">ID KARYAWAN</label>
	          <div class="col-sm-3">
	            <input type="text" class="form-control" name="tidkar" id="idk" value="<?php echo set_value('tidkar');?>"> <?php echo form_error('tidkar'); ?>
	            	<?php echo anchor('karyawan/cekid', 'cek id karyawan'); ?>
	          </div>
	        </div>

			<div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">JENIS</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="tJenis" value="<?php echo $detail->jenis; ?>" readonly><?php echo form_error('tJenis') ?>
	          </div>
	        </div>
			
			<div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">MERK</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="tMerk" value="<?php echo $detail->merk; ?>" readonly><?php echo form_error('tMerk') ?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">STOK MOBIL</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="tstok" value="<?php echo $detail->jumlah; ?>" disabled>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">HARGA SEWA</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name="tsewa" value="<?php echo $detail->biaya_sewa;?>" readonly>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
	          <div class="col-sm-3">
	            <input type="date" class="form-control" name="tglpi"><?php echo form_error('tglpi')?>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label for="" class="col-sm-2 col-form-label">STATUS</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" value="OUT" disabled>
	          </div>
	        </div>

	        <div class="form-group row">
	          <div class="col-sm-12" align="center">
	            <button type="submit" class="btn btn-primary btn-block" name="tombol" value="SIMPAN"><i class="fa fa-save"> SIMPAN</i></button>
	          </div>
	        </div>
				
				<!-- <tr>
					<td>NAMA KARYAWAN</td>
					<td><input type="text" name="tnamakar"> </td>
				</tr> -->					
		</form>
</div>
</div>
</div>
</div>


