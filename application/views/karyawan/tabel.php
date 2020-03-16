<!-- <div id="cari">
	<?php echo form_open('karyawan/cari'); ?>
	<select name="select_cari">
		<option value="">Cari Berdasarkan</option>
		<option value="id_karyawan">ID KARYAWAN</option>
		<option value="nama_karyawan">NAMA KARYAWAN</option>
		<option value="alamat">ALAMAT</option>
		<option value="no_telp">NO TELP</option>
	</select>
	<input type="text" name="tcari">	
	<input type="submit" name="tombol" value="CARI">
	<?php echo form_close(); ?>
</div> -->
<div class="box">
<div class="box-header">
<?php $message = $this->session->flashdata('pesan'); ?>
<?php echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':''; ?>
<?php echo !empty($title) ? '<h1 align="center">'.$title.'</h1>':''; ?>	


<div class="box-body">
 <table id="example1" class="table table-hover">
 	<thead>
	<tr>
		<th>ID KARYAWAN</th>
		<th>NAMA KARYAWAN</th>
		<th>ALAMAT</th>
		<th>NO TELP</th>
		<th><?php echo anchor('karyawan/add', '<i class="fa fa-plus btn btn-primary"></i>'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row):?>
	<tr>
		<td><?php echo $row->id_karyawan; ?></td>
		<td><?php echo $row->nama_karyawan; ?></td>
		<td><?php echo $row->alamat; ?></td>
		<td><?php echo $row->no_telp; ?></td>
		<td>
			<?php echo anchor('karyawan/edit/'.$row->id_karyawan,'<i class="fa fa-pencil btn btn-success"></i>'); ?>
			<?php echo anchor('karyawan/delete/'.$row->id_karyawan,'<i class="fa fa-trash btn btn-danger"></i>',array('onclick'=>"return confirm('Yakin Hapus?')")); ?>
		</td>
	</tr>	
	
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>
