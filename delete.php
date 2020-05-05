<?php
include 'connect.php';

if($_GET['delete']=="ok"){

    $id=$_POST['id'];

    $delete=$db->prepare("DELETE from book where id=:id");
    $deleted=$delete->execute(array('id'=>$_GET['id']));

}
if($deleted){
    	//echo "kayıt başarılı";

		Header("Location:booklist.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:booklist.php?durum=no");
		exit;
	}







?>