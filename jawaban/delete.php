<?php
include '../_config/config.php';

mysqli_query($con, "DELETE FROM tb_opsi WHERE id_opsi='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>