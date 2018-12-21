<?php include ('../header.php'); ?>
<div class="row">
	<h1>Opsi Jawaban</h1>
	<h4>
		<small>List Opsi Jawaban</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Pertanyaan</a>
		</div>
	</h4>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover" id="opsi">
		<thead>
			<tr>
				<th>Pertanyaan</th>
				<th>Opsi Jawaban</th>
				<th style="text-align:center;">Aktif</th>
				<th style="text-align:center;">Detail</th>
				<th style="text-align:center;"><i class="glyphicon glyphicon-cog"></i></th>
		</tr>
	</thead>

	<?php
	
	$sql_opsi = mysqli_query($con,"SELECT*FROM tb_opsi INNER JOIN tb_pertanyaan ON tb_opsi.id_soal=tb_pertanyaan.id_soal") or die (mysqli_error($con));
	if(mysqli_num_rows($sql_opsi)>0){
		while($data=mysqli_fetch_array($sql_opsi)){?>
			<tr>
				
				<td><?=$data['pertanyaan']?></td>
				<td><?=$data['opsi']?></td>
				<td width="100px" style="text-align:center;"><?=$data['aktif']?></td>
				<td width="100px" style="text-align:center;"><?=$data['detail']?></td>
				<td width="100px" class="text-center">
				<a href="edit.php?id=<?=$data['id_opsi']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
				<a href="delete.php?id=<?=$data['id_opsi']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
			$('#opsi').DataTable();
		   
		    } );
	</script>
</div>
<? include ('../footer.php'); ?>