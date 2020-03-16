<!--
SYAHRUL
XII RPL 1
12 - Januari - 2019
-->
<div class="box">
<div class="box-header">
<?php echo !empty($title) ? '<h1 align="center">'.$title.'</h1>':''; ?>	
<div class="box-body">
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

<div class="col-sm-12">
<table id="example1" class="table table-hover">
	<caption><?php echo !empty($pesan) ? '<p align="center" style="color:green">'.$pesan.'</p>':'';?></caption>
	<thead id="tjudul">
		<tr id="head">
			<th>KODE RENTAL</th>
			<th>NAMA KARYAWAN</th>
			<th>MERK MOBIL</th>
			<th>TANGGAL PINJAM</th>
			<th>TANGGAL KEMBALI</th>
			<th>TOTAL BAYAR</th>
			<th>STATUS</th>
			<th> <?php echo anchor('sewa/pinjam/'.$bio->id_customer, '<i class="fa fa-car btn btn-primary"> Pinjam</i>'); ?></th>
		</tr>
	</thead>
	<tbody id="tbody">
		<?php foreach ($hasil as $row) :?>
			<tr>
				<td><?php echo $row->id_sewa; ?></td>
				<td><?php echo $row->nama_karyawan; ?></td>
				<td><?php echo $row->merk; ?></td>
				<td><?php echo $row->tgl_pinjam;  ?></td>
				<td><?php echo $row->tgl_kembali; ?></td>
				<td><?php echo number_format($row->total_bayar); ?></td>
				<td><?php echo $row->status; ?></td>
				<td><?php echo anchor('sewa/pulang/'.$row->id_sewa, '<i class="fa fa-car btn btn-success"> Pulang</i>'); ?></td>
			</tr>
		<?php endforeach ?>	

	</tbody>

</table>
</div>
</div>
</div>
</div>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Rental Mobil</title>
</head>
<body>
	<?php echo !empty($title) ? '<h2 style="color:#000;">'.$title.'</h2>':''; ?>
	<table width="300">
		<tr>
			<td width="50">Nama</td>
			<td><?php echo "<b>".$bio->nama_customer."</b>"; ?></td>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo "<b>".$bio->id_customer."</b>"; ?></td>
		</tr>
	</table>

	<table width="100%">
		<caption><?php echo !empty($pesan) ? '<p style="color:green">'.$pesan.'</p>':''; ?></caption>
		<thead id="tjudul">
			<tr id="head">
				<th>ID Sewa</th>
				<th>ID Karyawan</th>
				<th>Merk Mobil</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Harga Sewa</th>
				<th>Denda</th>
				<th>Jaminan</th>
				<th>Status</th>
				<th><?php echo anchor('Sewa/pinjam/'.$bio->id_customer, 'Pinjam'); ?></th>
			</tr>
		</thead>
		<tbody id="tbody">
			<?php foreach ($hasil as $row): ?>
			<tr>
				<td><?php echo $row->id_sewa ?></td>
				<td><?php echo $row->id_karyawan ?></td>
				<td><?php echo $row->merk ?></td>
				<td><?php echo $row->tgl_pinjam ?></td>
				<td><?php echo $row->tgl_kembali ?></td>
				<td><?php echo $row->total_bayar ?></td>
				<td><?php echo $row->denda ?></td>
				<td><?php echo $row->jaminan; ?></td>
				<td><?php echo $row->status ?></td>
				<td><?php echo anchor('Sewa/pulang/'.$row->id_sewa, 'Pulang'); ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html> -->