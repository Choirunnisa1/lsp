<?php include ('../header.php'); ?>
<div class="row">
	<h1>Pertanyaan</h1>
	<h4>
		<small>List Pertanyaan</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Pertanyaan</a>
		</div>
	</h4>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover" id="soal">
		<thead>
			<tr>
				<th>No.</th>
				<!-- <th style="text-align:center;">Id</th> -->
				<th>Pertanyaan</th>
				<th width="100px" style="text-align:center;">Aktif</th>
				<th width="100px" style="text-align:center;"><i class="glyphicon glyphicon-cog"></i></th>
		</tr>
</thead>
<?php
$no=1;
	$sql_pertanyaan = mysqli_query($con,"SELECT*FROM tb_pertanyaan") or die (mysqli_error($con));
	if(mysqli_num_rows($sql_pertanyaan)>0){
		while($data=mysqli_fetch_array($sql_pertanyaan)){?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data['pertanyaan']?></td>
				<td style="text-align:center;"><?=$data['aktif']?></td>
				<td class="text-center">
				<a href="edit.php?id=<?=$data['id_soal']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
				<a href="delete.php?id=<?=$data['id_soal']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
			$('#soal').DataTable();
		   
		    } );
	</script>
</div>
<? include ('../footer.php'); ?>