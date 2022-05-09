<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST">
    <label for="">Nama</label>
    <input type="text" name="nama" id="">
    <br>
    <label for="">tanggal lahir</label>
    <input type="date" name="tanggal" value="">
    <br>
    <label for="job">pekerjaan</label>
    <select name="job" id="job">
      <option value="">Pilih...</option>
      <option value="">Programmer</option>
      <option value="">Designer</option>
      <option value="">Manager</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">  
  </form>
  <?php 
    echo 'nama' . $_POST['nama'];
    echo '<br>';
    $tanggal_lahir = new DateTime($_POST['tanggal']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    $bln = $sekarang->diff($tanggal_lahir)->m;
    $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "Umur anda adalah :<br>";
    echo $thn." tahun ".$bln." bulan ".$tgl." hari";
  ?>
</body>

</html>