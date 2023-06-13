<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha3841 BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjobrСEXSU10Boqy12QvZ6jIW3"
    crossorigin="anonymous"> 
 <title>Data Buku</title>
</head>
<body>
<div class="container" style="margin-top: 80px">
 <div class="row">
      <div class="col-md-12">
           <div class="card">
                <div class="card-header">
Data Buku
<a href="tambah.php" class="btn btn-sm btn-success" style="marginbottom: 10px; float: right;">Tambah Data</a>
</div>
 <div class="card-body">

      <table class="table table-bordered" id="my Table">
          <thead>
               <tr>
                    <th scope="col">NO.</th>
                    <th class="col-3" scope="col">JUDUL</th> 
                    <th class="col-2" scope="col">PENULIS</th> 
                    <th class="col-2" scope="col">ISBN</th>
                    <th class="col-2" scope="col">KATEGORI</th> 
                    <th class="col-1" scope="col">HARGA</th>
                    <th class="col-2" scope="col">AKSI</th>
               </tr> 
          </thead> 
          <tbody> 
               <?php
               include('koneksi.php'); 
               $no = 1;
               $query = mysqli_query($connection, "SELECT * FROM tbl_buku");
               while($row = mysqli_fetch_array($query)){
               ?>
               <tr>
                    <td><?php echo $no++ ?></td> 
                    <td><?php echo $row['judul'] ?></td> 
                    <td><?php echo $row['penulis'] ?></td>
                    <td><?php echo $row['isbn'] ?></td>
                    <td><?php echo $row['kategori'] ?></td>
                    <td><?php echo $row['harga'] ?></td> 
                    <td class="text-center">
                         <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                         <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
               </tr>
               <?php } ?>
          </tbody> 
     </table>
</div>
</div> 
</div> 
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">/script> 
<script> 
$(document). ready( function () {
$('#myTable').DataTable(); });
</script>
    
</body>
</html>