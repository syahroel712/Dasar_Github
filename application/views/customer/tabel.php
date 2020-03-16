


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
		<th>ALAMAT</th>
		<th>NO TELP</th>
		<th><?php echo anchor('customer/add', '<i class="fa fa-plus btn btn-primary"></i>'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row):?>
	<tr>
		<td><?php echo $row->id_customer; ?></td>
		<td><?php echo $row->nama_customer; ?></td>
		<td><?php echo $row->alamat; ?></td>
		<td><?php echo $row->no_telp; ?></td>
		<td>
			<?php echo anchor('customer/edit/'.$row->id_customer,'<i class="fa fa-pencil btn btn-success"></i>'); ?>
			<?php echo anchor('customer/delete/'.$row->id_customer,'<i class="fa fa-trash btn btn-danger"></i>',array('onclick'=>"return confirm('Yakin Hapus?')")); ?>
		</td>
	</tr>	
	
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>

