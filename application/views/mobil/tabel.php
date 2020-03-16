<!-- <div id="cari">
	<?php echo form_open('mobil/cari'); ?>
	<select name="select_cari">
		<option value="">Cari Berdasarkan</option>
		<option value="id_mobil">ID MOBIL</option>
		<option value="no_plat">NO PLAT</option>
		<option value="jenis">JENIS</option>
		<option value="merk">MERK</option>
		<option value="thn_buat">TAHUN BUAT</option>
		<option value="jumlah">JUMLAH</option>
		<option value="warna">WARNA</option>
		<option value="biaya_sewa">BIAYA SEWA</option>

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
		<th>ID MOBIL</th>
		<th>NO PLAT</th>
		<th>JENIS</th>
		<th>MERK</th>
		<th>TAHUN BUAT</th>
		<th>JUMLAH</th>
		<th>WARNA</th>
		<th>BIAYA SEWA</th>
		<th><?php echo anchor('mobil/add', '<i class="fa fa-plus btn btn-primary"></i>'); ?></th>
	</tr>
	</thead>
	<tbody id="tbody">
	<?php foreach ($rows as $row):?>
	<tr>
		<td><?php echo $row->id_mobil; ?></td>
		<td><?php echo $row->no_plat; ?></td>
		<td><?php echo $row->jenis; ?></td>
		<td><?php echo $row->merk; ?></td>
		<td><?php echo $row->thn_buat; ?></td>
		<td><?php echo $row->jumlah; ?></td>
		<td><?php echo $row->warna; ?></td>
		<td><?php echo number_format($row->biaya_sewa);  ?></td>
		<td>
			<?php echo anchor('mobil/edit/'.$row->id_mobil,'<i class="fa fa-pencil btn btn-success"></i>'); ?>
			<?php echo anchor('mobil/delete/'.$row->id_mobil,'<i class="fa fa-trash btn btn-danger"></i>',array('onclick'=>"return confirm('Yakin Hapus?')")); ?>
		</td>
	</tr>	
	
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>


