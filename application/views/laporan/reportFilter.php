


<table border="0" width="900">
<caption><?php echo !empty($title) ? '<h3>'.$title.'</h3>':''; ?></caption>
<thead id="tjudul">
	<tr id="head">
		<th>ID SEWA</th>
		<th>KARYAWAN</th>
		<th>CUSTOMER</th>
		<th>MERK MOBIL</th>
		<th>TANGGAL PINJAM</th>
		<th>TANGGAL KEMBALI</th>
		<th>HARGA SEWA</th>
		<th>STATUS</th>
	</tr>
</thead>
<tbody id="tbody">
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
		</tr>
	<?php endforeach ?>
	<tr>
		<td colspan="8"><?php echo "Total Uang Sewa Mobil Seluruhnya :Rp. <b>".number_format($totSewa->total_bayar)."</b>" ;?></td>
	</tr>
</tbody>		
</table>