<div class="box">
<div class="box-header">
<?php $message = $this->session->flashdata('pesan'); ?>
<?php echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':''; ?>
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
	<caption><?php echo !empty($pesan) ? '<p style="color:green">'.$pesan.'</p>':'';?></caption>
	<thead>
		<tr id="head">
			<th>ID MOBIL</th>
			<th>JENIS</th>
			<th>MERK</th>
			<th>JUMLAH</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $row) :?>
			<tr>
				<td><?php echo $row->id_mobil; ?></td>
				<td><?php echo $row->jenis; ?></td>
				<td><?php echo $row->merk; ?></td>
				<td><?php echo $row->jumlah; ?></td>
				<td><?php echo anchor('sewa/detail/'.$row->id_mobil, '<i class="fa fa-search btn btn-primary"> Detail</i>'); ?></td>
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

	<?php
		$message = $this->session->flashdata('pesan');
		echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':'';
		echo !empty($title) ? '<h2 style="color:#000;">'.$title.'</h2>':''; 
	?>

	<table width="700" id="tabel">
		<thead id="tjudul">
			<tr id="head">
				<th>ID Sewa</th>
				<th>Merk Mobil</th>
				<th>Harga Sewa</th>
				<th>Jumlah</th>
				<th></th>
			</tr>
		</thead>
		<tbody id="tbody">
			<?php foreach ($data as $row): ?>
			<tr>
				<td><?php echo $row->id_mobil ; ?></td>
				<td><?php echo $row->merk; ?></td>
				<td><?php echo $row->biaya_sewa; ?></td>
				<td><?php echo $row->jumlah;?></td>
				<td><?php echo anchor('Sewa/detail/'.$row->id_mobil, 'Detail'); ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html> -->