<div class="box">
<div class="box-header">
<div class="box-body">
<?php echo !empty($title) ? '<h2>'.$title.'</h2>':'' ; ?>
<form name="form1" method="POST" enctype="multipart/form-data">
		<div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">ID KARYAWAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tId" value="<?php echo $id_karyawan; ?>"><?php echo form_error('tId'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">NAMA KARYAWAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tNama" placeholder="Nama"value="<?php echo set_value('tNama'); ?>"> <?php echo form_error('tNama'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">ALAMAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tAlamat" value="<?php echo set_value('tAlamat'); ?>" placeholder="Alamat"> <?php echo form_error('tAlamat'); ?> 
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">NO TELP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tNo" value="<?php echo set_value('tNo'); ?>" placeholder="No Telp"><?php echo form_error('tNo'); ?>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-primary btn-block" name="simpan" value="SIMPAN"><i class="fa fa-save"> SIMPAN</i></button>
            <button type="reset" class="btn btn-warning btn-block" name="reset" value="RESET"><i class="fa fa-refresh"> RESET</i></button>
          </div>
        </div>

	</form>
	</div>
	</div>
	</div>
