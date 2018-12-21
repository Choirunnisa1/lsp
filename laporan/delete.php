<?php
include '../_config/config.php';

mysqli_query($con, "DELETE FROM data_responden WHERE id_responden='$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='index.php';</script>";
?>