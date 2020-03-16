<div class="box">
<div class="box-header">
<?php $message = $this->session->flashdata('pesan'); ?>
<?php echo !empty($message) ? '<p style="background-color:#E6E6FA">'.$message.'</p>':''; ?>	
<?php echo !empty($title) ? '<h1 align="center">'.$title.'</h1>':''; ?>

<div id="cari" align="right">
	<h3>Cari Berdasarkan Tanggal</h3>
	<?php echo form_open('laporan/filter');?>	
		<input type="date" name="tgl1"> s/d <input type="date" name="tgl2">
		<input type="submit" name="tombol" value="CARI">
	<?php echo form_close(); ?>
</div>

<div class="box-body">
<table id="example1" class="table table-hover">
<thead>
	<tr>
		<th>ID SEWA</th>
		<th>NAMA KARYAWAN</th>
		<th>NAMA CUSTOMER</th>
		<th>MERK MOBIL</th>
		<th>TANGGAL PINJAM</th>
		<th>TANGGAL KEMBALI</th>
		<th>HARGA SEWA</th>
		<th>STATUS</th>
		<!-- <th><?php echo anchor('laporan/viewAll','DOWNLOAD ALL DATA to PDF')?></th> -->
		<th><?php echo $link ?></th>
	</tr>
</thead>
<tbody>
		<?php foreach ($rows as $row) : ?>
		<tr>
			<td><?php echo $row->id_sewa ?></td>
			<td><?php echo $row->nama_karyawan ?></td>
			<td><?php echo $row->nama_customer ?></td>
			<td><?php echo $row->merk ?></td>
			<td><?php echo $row->tgl_pinjam ?></td>
			<td><?php echo $row->tgl_kembali ?></td>
			<td><?php echo number_format($row->total_bayar); ?></td>
			<td><?php echo $row->status ?></td>
			<td>
				<?php echo anchor('laporan/detail/'.$row->id_sewa,'<i class="fa fa-download btn btn-success"> Detail</i>')?>	
			</td>
		</tr>

	<?php endforeach ?>
</tbody>		
</table>
	<h4 align="right"><?php echo "Total Uang Sewa Mobil Seluruhnya :Rp. <b>".number_format($totSewa->total_bayar)."</b>" ;?></h4>




</div>
</div>
</div>
