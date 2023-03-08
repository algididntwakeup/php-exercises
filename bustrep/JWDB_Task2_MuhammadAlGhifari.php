<?php
if (isset($_POST['klik'])) { //ketika submit
    echo $_POST['nl']; 
    echo $_POST['tl']; 
    echo $_POST['ttl']; 
    echo $_POST['teknik']; 
    echo $_POST['als']; 
    echo $radio_value = $_POST["lman"];

}
else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <form  method="post">
<div class="row">
    <div class="container mx-auto">
        <h2 class="alert alert-primary text-center mt-3"> Formulir Pendaftaran Mahasiswa Baru</h2>
        <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Lengkap</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap Anda" name="nl">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Tempat Lahir</label>
      <input type="text" class="form-control" placeholder="Masukkan Tanggal Lahir Anda" name="tl">
    </div>
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Tanggal Lahir</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Tanggal Lahir" name="ttl">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jurusan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="teknik">
      <option>1. Teknik Informatika</option>
      <option>2. Teknik Industri</option>
      <option>3. Teknik Mesin</option>
      <option>4. Teknologi Pangan</option>
      <option>5. Perancangan Wilayah Kota</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alasan Memilih Universitas ABC</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="als"></textarea>
  </div>
  <label for="custom-control-inline">Jenis Kelamin</label>
  <div class="form-group">
      <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline1" name="lman" class="custom-control-input" value="Laki-Laki">
      <label class="custom-control-label" for="customRadioInline1" name="l">Laki-laki</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="wman" class="custom-control-input" value="Perempuan">
      <label class="custom-control-label" for="customRadioInline2" name="w">Perempuan</label>
    </div>
  </div>
<button type="submit" class="btn btn-primary my-1" name="klik">Submit</button>
  </div>
</form>
    </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>