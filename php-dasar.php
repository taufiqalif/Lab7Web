<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php dasar</title>
</head>

<body>


  <h1>belajar php dasar</h1>
  <?php echo "Hello World!"; ?>

  <h2>menggunakan variable</h2>

  <?php
  $nim = "312010289";
  $nama = 'Taufiq Alif Rahman';
  echo "NIM : " . $nim . "<br>";
  echo "Nama : " . $nama;
?>

  <h2>Predefine Variable $_GET</h2>
  <?php 
  echo 'selamat datang ' . $_GET['nama'];
?>


<h2>oprator</h2>
<?php 
  $gaji = 1000000; 
  $pajak = 0.1; 
  $thp = $gaji - ($gaji*$pajak); 
  echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
  echo "Gaji yang dibawa pulang = Rp. $thp"; 
?>

<h2>kondisi if</h2>
<?php 
  $nama_hari = date('l');
  if ($nama_hari == "Sunday") {
    echo "Minggu";
  } elseif ($nama_hari == "Monday") {
    echo "Senin";
  } elseif ($nama_hari == "Tuesday") {
    echo "Selasa";
  } elseif ($nama_hari == "Wednesday") {
    echo "Rabu";
  } elseif ($nama_hari == "Thursday") {
    echo "Kamis";
  } elseif ($nama_hari == "Friday") {
    echo "Jumat";
  } elseif ($nama_hari == "Saturday") {
    echo "Sabtu";
  } else {
    echo "Hari tidak ditemukan";
  }
?>

<h2>kondisi switch</h2>
<?php 
  $nama_hari = date('l');
  switch ($nama_hari) {
    case 'Sunday':
      echo "Minggu";
      break;
    case 'Monday':
      echo "Senin";
      break;
    case 'Tuesday':
      echo "Selasa";
      break;
    case 'Wednesday':
      echo "Rabu";
      break;
    case 'Thursday':
      echo "Kamis";
      break;
    case 'Friday':
      echo "Jumat";
      break;
    case 'Saturday':
      echo "Sabtu";
      break;
    default:
      echo "Hari tidak ditemukan";
      break;
  }
?>

<h2>perulangan for</h2>
<?php
  echo "perulangan 1 sampai 10 <br>";
  for ($i=1; $i <= 10; $i++) { 
    echo "perulangan ke : " . $i . '<br>';
  }

  echo "perulangan menurun dari 10 ke 1 <br>";
  for ($i=10; $i >= 1; $i--) { 
    echo "perulangan ke : " . $i . '<br>';
  }
?>

<h2>perulangan while</h2>
<?php
  echo "perulangan 1 sampai 10 <br>";
  $i = 1;
  while ($i <= 10) {
      echo "perulangan ke : " . $i . '<br>';
      $i++;
  }
?>

<h2>perulangan dowhile</h2>
<?php
  echo "perulangan 1 sampai 10 <br>";
  $i = 1;
  do {
      echo "perulangan ke : " . $i . '<br>';
      $i++;
  } while ($i <= 10);
?>

</body>

</html>