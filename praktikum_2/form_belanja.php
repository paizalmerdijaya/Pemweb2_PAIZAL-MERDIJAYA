<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA @POST</title>
</head>
<body>

<table border="1" align="right">
  <tr style="background-clor:blue:">
    <td>Daftar Harga</td>
  </tr>
  <tr>
    <td>TV : 4.200.000</td>
  </tr>
  <tr>
    <td>Kulkas : 3.100.000</td>
  </tr>
  <tr>
    <td>MESIN CUCI : 3.800.000</td>
  </tr>
  <tr style="bakcground-color:blue:">
    <td>Harga Dapat Berubah Setiap Saat</td>
  </tr>
</table>

    <center>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text" name="nama"  type="text"  value="" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text4" name="jumlah"  type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">KIRIM</button>
    </div>
  </div>
</form>

<?php


$costumer = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "tv"){
  $total = $produk * 4200000;
}elseif($produk == "kulkas"){
  $total = $produk * 3100000;
}elseif($produk == "mesincuci"){
  $total = $produk * 3800000;
}

echo "Nama Costumer : $costumer";
echo "</br>Nama Produk : $produk";
echo "</br>Jumlah Produk : $jumlah";
echo "</br>Total Barang : $total";


?>
</center>
</body>
</html>