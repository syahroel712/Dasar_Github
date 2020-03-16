<div class="box">
<div class="box-header">
<div class="box-body">
<?php echo !empty($title) ? '<h2>'.$title.'</h2>':'' ; ?>
<form name="form1" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">ID MOBIL</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tId" value="<?php echo $id_mobil; ?>"><?php echo form_error('tId'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">NO PLAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tNoplat" value="<?php echo set_value('tNoplat'); ?>"> <?php echo form_error('tNoplat'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">JENIS</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tJenis" value="<?php echo set_value('tJenis'); ?>"> <?php echo form_error('tJenis'); ?> 
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">MERK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tMerk" value="<?php echo set_value('tMerk'); ?>"> <?php echo form_error('tMerk'); ?> 
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">TAHUN BUAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tTahun" value="<?php echo set_value('tTahun'); ?>"> <?php echo form_error('tTahun'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">JUMLAH</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tJumlah" value="<?php echo set_value('tJumlah'); ?>"> <?php echo form_error('tJumlah'); ?>
          </div>
        </div>	

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">WARNA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tWarna" value="<?php echo set_value('tWarna'); ?>"> <?php echo form_error('tWarna'); ?> 
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">BIAYA SEWA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tBiaya" value="<?php echo set_value('tBiaya'); ?>"> <?php echo form_error('tBiaya'); ?>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-primary btn-block" name="tombol" value="SIMPAN"><i class="fa fa-save"> SIMPAN</i></button>
            <button type="reset" class="btn btn-warning btn-block" name="reset" value="RESET"><i class="fa fa-refresh"> RESET</i></button>
          </div>
        </div>

	</form>
	</div>
	</div>
	</div>
