<?php include('dataorder.php')
header("Content-type: application/vnd-ms-excel");
ekspor "dataorder.xls"
header("Content-Disposition: attachment; filename=dataorder.xls");
?>