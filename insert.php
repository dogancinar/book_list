<?php
include 'connect.php';



if(isset($_POST['book_name'])){


   $book=$db->prepare("INSERT INTO book set
   
   book_name=:book_name,
   book_author=:book_author,
   book_category=:book_category,
   book_date=:book_date,
   book_lastdate=:book_lastdate
   
   
   ");



   $insert=$book->execute(array(
       'book_name'=>$_POST['book_name'],
       'book_author'=>$_POST['book_author'],
       'book_category'=>$_POST['book_category'],
       'book_date'=>$_POST['book_date'],
       'book_lastdate'=>$_POST['book_lastdate']

));


if($insert){
    Header("Location:index.php?durum=ok");
}else{
    Header("Location:index.php?durum=no");
}
}




?>