<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .form {
          margin: 200px 500px 400px 500px;
          
        } 
 
        label {
          width: 110px;
        }
        .form_1 {
          padding-top: 10px;
        }
        .form_2 {
          padding-top: 10px;
        }
        .form_3 {
          padding-top: 10px;
        }
        .form_4 {
          padding-top: 10px;
        }
        .form_5 {
          padding-top: 10px;
        }
        .button_1 {
          padding-top: 17px;
        }
    </style>
</head>
<body>
<form class="form" method="GET" action="array_siswa.php">
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_1">
    <label for="Nama" class="col-form-label" >Nama Lengkap</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control"  name="nama" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_2">
    <label for="UTS" class="col-form-label"  >NIM</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control" name="nim" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_3">
    <label for="UTS" class="col-form-label" >Nilai UTS</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control" name="uts" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_4">
    <label for="UAS" class="col-form-label"  >Nilai UAS</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control"  name="uas" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_5">
    <label for="Tugas" class="col-form-label"  >Nilai Tugas</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control" name="tugas" aria-describedby="passwordHelpInline">
  </div>
  </div>
  <div class="button_1">
  <button type="submit" class="btm btn-primary">Simpan</button>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>
