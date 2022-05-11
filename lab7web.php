<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Dasar</title>
</head>

<body>

  <div class="kotak">
    <p class="biodata">Isi biodata</p>

    <form action="" method="POST">
      <label for="">Nama</label>
      <input class="nama" type="text" name="nama" id="">
      <br>
      <label for="">tanggal lahir</label>
      <input class="nama" type="date" name="tanggal" value="">
      <br>
      <label for="job">pekerjaan</label>
      <select class="nama" name="job" id="job">
        <option value="pilih">Pilih...</option>
        <option value="programer">Programmer</option>
        <option value="designer">Designer</option>
        <option value="manager">Manager</option>
      </select>
      <br>
      <input type="submit" class="tombol" name="submit" value="Submit">  
    </form>
  
  <div class="output">
  <?php 
    // nama
    echo 'nama saya ' . @$_POST['nama'];
    echo '<br>';

    // tanggal lahir
    $tanggal_lahir = new DateTime(@$_POST['tanggal']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    $bln = $sekarang->diff($tanggal_lahir)->m;
    $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "Umur saya  " . $thn . " tahun " . $bln . " bulan " . $tgl . " hari";
    echo '<br>';

    // pekerjaan
    echo 'pekerjaan pekerjaan saya ' . @$_POST['job'];
    echo '<br>';
    if (@$_POST['job'] == 'programer') {
      echo 'gaji saya 12 juta';
    } elseif (@$_POST['job'] == 'designer') {
      echo 'gaji saya 10 juta';
    } elseif (@$_POST['job'] == 'manager') {
      echo 'gaji saya 8 juta';
    } else {
      echo 'anda tidak punya pekerjaan';
    }
  ?>
  </div>
  </div>
</body>

</html>