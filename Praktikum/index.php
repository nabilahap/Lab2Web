<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Dasar</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="bio">
    <h2 class="biodata">Biodata</h2>
    <hr>
    <form action="" method="POST">
      <label for="">Nama</label>
      <input class="nama" type="text" name="nama" id="" placeholder="Masukan Nama....">
      <br>
      <label for="">Tanggal Lahir</label>
      <input class="nama" type="date" name="Tanggal" value="">
      <br>
      <label for="job">Pekerjaan</label>
      <select class="nama" name="job" id="job">
        <option value="pilih">Pilih...</option>
        <option value="programer">Programmer</option>
        <option value="designer">Designer</option>
        <option value="manager">Manager</option>
        <option value="buruh">Buruh</option>
      </select>
      <br>
      <input type="submit" class="kirim" name="submit" value="Submit">
      <hr>
    </form>

    <div class="output">
      <?php
      // Output Nama
      echo 'nama  ' . @$_POST['nama'];
      echo '<br>';
      // Output tanggal lahir
      $tanggal_lahir = new DateTime(@$_POST['Tanggal']);
      $sekarang = new DateTime("today");
      if ($tanggal_lahir > $sekarang) {
        $thn = "0";
        $bln = "0";
        $tgl = "0";
      }
      $thn = $sekarang->diff($tanggal_lahir)->y;
      echo "Umur " . "( " . $thn  . " Tahun )";
      echo '<br>';

      // Output pekerjaan
      echo 'pekerjaan  '  . @$_POST['job'];
      echo '<br>';
      if (@$_POST['job'] == 'programer') {
        echo 'gaji Rp. 15.000.000 Juta';
      } else if (@$_POST['job'] == 'designer') {
        echo 'gaji Rp. 10.000.000 juta';
      } else if (@$_POST['job'] == 'manager') {
        echo 'gaji Rp. 10.000.000 juta';
      } else if (@$_POST['job'] == 'buruh') {
        echo 'Gaji Rp. 6.000.000 Juta';
      } else {
        echo 'Tidak Memiliki pekerjaan ';
      }
      ?>
    </div>
  </div>
</body>

</html>