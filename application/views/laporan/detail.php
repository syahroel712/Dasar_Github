<div class="box">
<div class="box-header">

<?php echo !empty($pesan) ? '<p>'.$pesan.'</p>':''; ?>
<?php echo !empty($title) ? '<h3>'.$title.'</h3>':''; ?>		
<div class="box-body">	
<div id="dataform">

 <?php echo form_open('laporan/detailpdf'); ?>
	<div class="form-group row">
		<div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">NAMA</label>
          <div class="col-sm-10">
          	<?php echo $rows->nama_customer; ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">ID SEWA</label>
          <div class="col-sm-10">
          	<?php echo $rows->id_sewa ?>
            <input type="hidden" name="thide" value="<?php echo $rows->id_sewa;?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">MERK</label>
          <div class="col-sm-10">
          	<?php echo $rows->merk ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">HARGA SEWA</label>
          <div class="col-sm-10">
          	<?php echo number_format($rows->total_bayar);?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">TANGGAL PINJAM</label>
          <div class="col-sm-10">
          	<?php echo $rows->tgl_pinjam ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">TANGGAL KEMBALI</label>
          <div class="col-sm-10">
          	<?php echo $rows->tgl_kembali ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">STATUS</label>
          <div class="col-sm-10">
          	<?php echo $rows->status ?>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-4" align="center">
            <button type="submit" class="btn btn-primary btn-block" name="tombol" value="SIMPAN"><i class="fa fa-download"> DOWNLOAD</i></button>
          </div>
        </div>

<?php echo form_close() ;?>
</div>
</div>
</div>
</div>
</div>
