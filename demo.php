<?php
include_once ('dve_data_api.php');
$dve_data=new dve_data_api('5ece4797eaf5e','62a451ed2dc5f');

$data=$dve_data->get_data($data='student',$qkey='studentCode=6021010112');
//$data=$dve_data->get_data($data='student',$qkey=NULL);

print_r($data);