<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=booklist;charset=utf8",'root','');

	//echo "Veritabanı bağlantısı başarılı";

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>