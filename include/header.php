<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <title>BookList</title>

        <script>
       
$(document).ready(function(){
$("#ajaxx").submit(function(event){

  event.preventDefault();
    $.ajax({
        url:"insert.php",
        type:"POST",
        data:$("form").serialize(),
        success: function(){
          document.getElementById("book_name").value='';
          document.getElementById("book_author").value='';
          document.getElementById("book_category").value='';
          document.getElementById("book_date").value='';
          document.getElementById("book_lastdate").value='';
      
    alert('Kitap Bşarılı Şekilde Eklendi');
  },
  error: function(){
    alert('failure');
  }
    });
 

});

});

        </script>



      
  </head>