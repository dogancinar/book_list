<?php 	include 'include/header.php'
?>




  <body>





<div class="container">
  
<div class="card" style="width: 50rem; margin-top:30px;margin-left:100px;"  >

  <div class="card-header text-center" >Okuduğum Kitapların Listesi</div>
 
  <form action="" method="post" id="ajaxx" style="height:100%;">
  
  <ul class="list-group list-group-flush">
  <li class="list-group-item">
      <input type="text" name="book_name" id="book_name" class="form-control" placeholder="Kitap Adını Giriniz">
  </li>
  <li class="list-group-item">
      <input type="text" name="book_author" id="book_author" class="form-control" placeholder="Yazar Adını Giriniz">
  </li>
    <li class="list-group-item">

        <select name="book_category" id="book_category" class="form-control">
            <option value="">Kitap Kategorisi Seçiniz</option>
            <option value="Bilim & Mühendislik">Bilim & Mühendislik</option>
            <option value="Edebiyat">Edebiyat</option>
            <option value="Dini ">Dini</option>
            <option value="Eğitim">Eğitim</option>
            <option value="Felsefe">Felsefe</option>
            <option value="Kültür">Kültür</option>
            <option value="Politika">Politika</option>
            <option value="Sağlık ">Sağlık </option>
            <option value="Tarih">Tarih</option>
        </select>

    </li>

    
   
    <li class="list-group-item">
        <small>Başlangıç Tarihini Giriniz</small>
     <input type="date" name="book_date" id="book_date"class="form-control">

    </li>
    <li class="list-group-item">
        <small>Bitirme Tarihini Giriniz</small>
     <input type="date" name="book_lastdate" id="book_lastdate" class="form-control mb-2">
    <hr>
<button class="btn btn-primary" name="save"  >Ekle</button>


<a href="booklist.php"><p style="float: right">Kitap Listesine Git</p> </a>
    </li>
    
  
  </ul><br>
  </form>


</div>

</div>




<br>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>