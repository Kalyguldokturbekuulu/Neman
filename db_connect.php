<?php
$db_host = 'localhost';
$db_user = 'phpkadiadmin';
$db_pass = 'kadi.2102';
$db_database = 'neman-source';
$db_table='product';

$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

/*if($link == false){
	echo "ошибка подлючение";
}elseif($link == true){
echo "подключено";
}*/

?>