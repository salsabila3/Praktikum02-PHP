<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="dasar dasar pemrograman">Dasar Dasar Pemrograman</option>
        <option value="basis data">Basis Data</option>
        <option value="inggris">Inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="niali uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="niali uts" name="niali uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uas" class="col-4 col-form-label">Nilai  UAS</label> 
    <div class="col-8">
      <input id="nilai uas" name="nilai uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai tugas/praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai tugas/praktikum" name="nilai tugas/praktikum" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="Proses"/>
    </div>
  </div>
</form>
<?php
  $proses = $_GET['proses'];
  $nama_siswa = $_GET['nama'];
  $mata_kuliah = $_GET['matkul'];
  $nilai_uts = $_GET['nilai_uts'];
  $nilai_uas = $_GET['nilai_uas'];
  $nilai_tugas = $_GET['nilai_tugas'];

  echo 'Proses : '.$proses;
  echo '<br/>Nama : '.$mata_siswa;
  echo '<br/>Mata Kuliah : '.$mata_kuliah;
  echo '<br/>Nilai UTS : '.$nilai_uts;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
  ?>
</body>
</html>