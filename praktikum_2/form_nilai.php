<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI SISWA @GET</title>
   
</head>
<body> 
    
<form method="GET" action="coba1.php">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="form-group row">
    <label for="text" class="col-6 col-form-label">Nama Lengkap</label> 
    <div class="col-6">
      <input id="text" name="nama"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-6 col-form-label">Mata Kuliah</label> 
    <div class="col-6">
      <select id="" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BD1">Basis Data</option>
        <option value="PW1">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-6 col-form-label">Nilai UTS</label> 
    <div class="col-6">
      <input id="text2" name="nilai_uts"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-6 col-form-label">Nilai UAS</label> 
    <div class="col-6">
      <input id="text3" name="nilai_uas"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-6 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-6">
      <input id="text4" name="nilai_tugas"  type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

<?php

$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];


echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>

</body>
</html>