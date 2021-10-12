<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXL"
</head>
<body>
    <div class="container">
        <h1>Masukan Biodata Anda</h1>
        <form method="POST" action="proses_simpan_biodata.php">
            <div class="mb-3">
                <label for="nama_user" class="form-label">nama lengkap :</label>
                <input type="text" class="form-control" name="nama_user" placeholder="Masuk Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">jenis kelamin :</label>
                <input type="radio" name="gender" value="L" placeholder="input jenis kelamin"> <Laki-Laki>
                

            </div>
    </div>
</body>