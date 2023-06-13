<?php

include('koneksi.php');

$id = $_GET['id']; 
$query = "SELECT * FROM tbl_buku WHERE id = $id LIMIT 1"; 
$result = mysqli_query($connection, $query); 
$row = mysqli_fetch_array($result);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3841BmE4kWBq78iYhFldvKuhfTAU6auU8t194WrHftjobrСEXSU10Boqy12QvZ6jIW3" crossorigin="anonymous"><title>Edit Mahasiswa</title>
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit Buku
                </div>
                <div class="card-body">
                    <form action="update.php" method="POST">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" value="<?php echo $row['judul'] 
?>" placeholder="Masukkan Judul Buku" class="form-control">
                        <input type="hidden" name="id" value="<?php echo $row['id']
                        ?>">
                    </div>
                    <div class="form-group">
                        <label>PENULIS</label>
                        <input type="text" name="penulis" value="<?php echo $row['penulis'] ?>" placeholder="Masukkan Nama Penulis" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" name="isbn" value="<?php echo $row['isbn'] ?>" placeholder="Masukkan ISBN Buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>KATEGORI</label>
                        <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>" placeholder="Masukkan Kategori Buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>HARGA</label>
                        <input type="number" name="harga" value="<?php echo $row['harga'] ?>" placeholder="Masukkan Nama Penulis" class="form-control">
                    </div>

<button type="submit" class="btn btn-success">UPDATE</button> 
<button type="reset" class="btn btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1. slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
</body>
</html>