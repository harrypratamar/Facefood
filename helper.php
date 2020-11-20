<?php 
function printr_data($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
function printr_data_ex($data){
	printr_data($data);
	exit();
}

function vardump_data($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}
function vardump_data_ex($data){
	vardump_data($data);
	exit();
}
?>
