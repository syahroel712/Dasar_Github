<!--
SYAHRUL
XII RPL 1
12 - Januari - 2019
-->
<div class="box">
<div class="box-header">
	<?php $message = $this->session->flashdata('pesan'); ?>
	<?php echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':''; ?>
	<?php echo !empty($title) ? '<h1 align="center">'.$title.'</h1>':''; ?>	
<div class="box-body">
<table id="example1" class="table table-hover">
		<thead>
		<tr>
			<th>ID CUSTOMER</th>
			<th>NAMA CUSTOMER</th>
			<th>RIWAYAT PEMINJAMAN</th>
			
		</tr>
		</thead>
		<tbody>

		<?php foreach ($rows as $row):?>
			
			<tr>
				<td align="CENTER"><?php echo $row->id_customer; ?></td>
				<td align="CENTER"><?php echo $row->nama_customer; ?></td>
				<td align="CENTER">
					<?php echo anchor('sewa/riwayat/'.$row->id_customer,'<i class="fa fa-search btn btn-primary"> Detail</i>'); ?>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>	
</table>
</div>
</div>
</div>



<!-- <!DOCTYPE html>
<html>
<head>
	<title>Rental Mobil</title>
</head>
<body>
	<?php 
		$message = $this->session->flashdata('pesan');
		echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':'';
		echo !empty($title) ? '<h2 style="color:#000;">'.$title.'</h2>':''; 
	?>
	<table width="700">
		<thead id="tjudul">
			<tr>
				<th>ID Customer</th>
				<th>Nama</th>
				<th></th>
			</tr>
		</thead>
		<tbody id="tbody">
			<?php foreach ($row as $rows):?> 
			<tr>
				<td style="color: #000;"><?php echo $rows->id_customer; ?></td>
				<td style="color: #000;"><?php echo $rows->nama_customer; ?></td>
				<td><?php echo anchor ('Sewa/riwayat/'.$rows->id_customer,'Riwayat');?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $pagination; ?>
</body>
</html> -->