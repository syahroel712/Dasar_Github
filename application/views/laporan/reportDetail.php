<?php echo !empty($title) ? '<h3>'.$title.'</h3>':''; ?>
<div id="dataform">
	<table border="0" width="500">
		<tr>
			<td>NAMA</td>
			<td><?php echo $rows->nama_customer?></td>
		</tr>
		<tr>
			<td>ID Sewa</td>
			<td><?php echo $rows->id_sewa;?></td>
			<input type="hidden" name="thide" value="<?php echo $rows->idT;?>">
		</tr>
		<tr>
			<td>Merk</td>
			<td><?php echo $rows->merk ;?></td>
		</tr>
		<tr>
			<td>Harga Sewa</td>
			<td><?php echo number_format($rows->total_bayar);?></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
			<td><?php echo $rows->tgl_pinjam;?></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td><?php echo $rows->tgl_kembali;?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><?php echo $rows->status;?></td>
		</tr>
	</table>
</div>
