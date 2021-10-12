<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class ="container">
        <h1>data kelas</h1>
        <form action="tampil_kelas.php" method ="post">
          <input type="text" name ="cari" class ="form_control"
          placeholder="cari berdasarkan ID/Nama kelas" />
        </form>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id_kelas</th>
      <th scope="col">nama_kelas</th>
      <th scope="col">kelompok</th>
      </tr>
  </thead>
  <tbody>
  <tr>
                    <?php
                    include("koneksi.php");
                    if (isset($_POST["cari"])) {
                       // jika ada keyword pencarian
                       $cari = $_POST['cari'];
                       $query_kelas =mysqli_query($koneksi,
                       "select * from kelas where id_kelas like '%$cari%'
                       or nama_kelas like '%$cari%'");
                    } else {
                       // jika tidak ada keyowrd pencarian
                       $query_kelas =mysqli_query($koneksi,"select * from kelas");
                    }  
                
                      while ($data_kelas = mysqli_fetch_array($query_kelas)) { ?>
                        <tr>
                            <td><?php echo $data_kelas["id_kelas"]; ?></td>
                            <td><?php echo $data_kelas["nama_kelas"]; ?></td>
                            <td><?php echo $data_kelas["kelompok"]; ?></td>
                        </tr>
                     <?php
                     }
                     ?>
  </tbody>
</table>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>    
