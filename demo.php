<?php
include_once ('dve_data_api.php');
$dve_data= new dve_data_api('YOUR_API_ID','YOUR_SECRET_KEY');

$data=$dve_data->get_data($data='student',$qkey='studentCode=6021010112');
//$data=$dve_data->get_data($data='student',$qkey=NULL);

print_r($data);
