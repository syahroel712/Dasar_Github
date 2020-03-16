<div class="box">
<div class="box-header">
<?php echo !empty($title) ? '<h1 align="center">'.$title.'</h1>':''; ?>	
<input type="button" class="btn btn-info" name="tombol" value="KEMBALI KE TRANSAKSI" onclick="javacsript:history.go(-1);"></td>

<div class="box-body">
<table id="example1" class="table table-hover">
	<thead>
	<tr>
		<th>ID KARYAWAN</th>
		<th>NAMA KARYAWAN</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row):?>
	<tr>
		<td><?php echo $row->id_karyawan; ?></td>
		<td><?php echo $row->nama_karyawan; ?></td>
	</tr>	
	
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>
