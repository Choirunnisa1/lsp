<?php include ('../header.php'); ?>
<div class="row">
	<h1>Data Customer Responder</h1>
	<h4>
		<small>List Responden</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
		</div>
	</h4>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover" id="responden">
		<thead>
			<tr>
				<th width="100px">Nama</th>
				<th>Produk</th>
				<th>Type</th>
				<th>Alamat kerja sekarang</th>
				<th>Alamat tinggal sekarang</th>
				<th>No hp/telp</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
				<th>Pekerjaan</th>
				<th>Pendidikan Terakhir</th>
				<th>Status</th>
				<th>Penghasilan</th>
				<th>Sumber dana penghasilan</th>
				<th>Tujuan pembelian</th>
				<th style="text-align:center;"><i class="glyphicon glyphicon-cog"></i></th>
		</tr>
	</thead>

	<?php
	
	$sql_responden = mysqli_query($con,"SELECT*FROM data_responden") or die (mysqli_error($con));
	if(mysqli_num_rows($sql_responden)>0){
		while($data=mysqli_fetch_array($sql_responden)){?>
			<tr>
				
				<td><?=$data['nama']?></td>
				<td><?=$data['produk_beli']?></td>
				<td><?=$data['type']?></td>
				<td><?=$data['alamat_kerja']?></td>
				<td><?=$data['alamat_tinggal']?></td>
				<td><?=$data['telepon']?></td>
				<td><?=$data['jekel']?></td>
				<td><?=$data['umur']?></td>
				<td><?=$data['pekerjaan']?></td>
				<td><?=$data['pendidikan']?></td>
				<td><?=$data['status']?></td>
				<td><?=$data['penghasilan']?></td>
				<td><?=$data['sumber_penghasilan']?></td>
				<td><?=$data['tujuan_beli']?></td>
				<td width="100px" class="text-center">
				<a href="delete.php?id=<?=$data['id_responden']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
		</tr>
	 <?php
		}
	} else {
		
	}
	?>
	</table>
	</div>
	<script>
		$(document).ready(function() {
			$('#responden').DataTable();
		    } );
	</script>
</div>
<? include ('../footer.php'); ?>