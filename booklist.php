<?php include 'include/header.php' ?>

  <body>
  <?php  if (@$_GET['durum']=='ok') { ?><script>Swal.fire('Başarılı','','success')</script></b>
                                <?php   }else if(@$_GET['durum']=='no') { ?>  <script>Swal.fire(' Başarısız','','error')</script>
                                <?php  } ?>
<br>
<div class="container">

 <table class="table table-striped" >
  <thead>
    <tr>
      <th>Kategori</th>
      <th scope="col">Kitap Adı</th>
      <th scope="col">Yazarın Adı</th>
      <th scope="col">Başlangıç Tarihi</th>
      <th scope="col">Bitirme Tarihi</th>
      <th scope="col">Kaldır</th>
    </tr>
  </thead>
  <tbody id="getir">
    <tr >
    <?php
      
      include 'connect.php';

      $getir=$db->prepare("SELECT * from book");
      $getir->execute();
      foreach($getir as $get){

        { ?>
<td><?php echo $get['book_category']?></td>
<td scope="row"><?php echo $get['book_name']?></td>
      <td><?php echo $get['book_author']?></td>
      <td><?php echo $get['book_date']?></td>
      <td><?php echo $get['book_lastdate']?></td>
      <td>  <a href="delete.php?id=<?php echo $get['id'] ?>&delete=ok"> <button class="btn btn-danger text-xs  btn-sm"><i class="fa fa-trash"></i></button></a></td>
    
    </tr>
 
          <?php
          }

      }
 ?>

    </tr>

  </tbody>

</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
