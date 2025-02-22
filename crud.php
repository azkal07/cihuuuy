<?php
// koneksinya
$koneksi=mysqli_connect('localhost','root','','akademikazkal');
?>
<!DOCTYPE html>
<html>
<head>
<title>
form input data mahasiswa
</title>
</head>
<body>
    <center><table><tr><td><img src="" alt=""></td></tr></table></center>
<center><table>
<form method='POST' action='tambahdata.php'>
<tr><td colspan='3'><center>Formulir Isi Data Akademik Mahasiswa</center></td></tr>
<tr>
    <td>NPM</td>
    <td>:</td>
    <td><input type='text' name='npm'></td>
</tr>
<tr>
    <td>Nama Mahasiswa</td>
    <td>:</td>
    <td><input type='text' name='nmms'></td>
</tr>
<tr>
    <td>Kode Matkul</td>
    <td>:</td>
    <td><input type='text' name='kdmk'></td>
</tr>
<tr>
    <td>Nama Matkul</td>
    <td>:</td>
    <td>
        <input type='text' name='nmmk'></td>
</tr>
    </td>
</tr>
<tr>
    <td>Tahun Ajaran</td>
    <td>:</td>
    <td>
        <input type='text' name='tahunakademik'></td>
    </tr>
    <tr>
    <td>kehadiran</td>
    <td>:</td>
    <td>
        <input type='text' name='kehadiran'></td>
</tr>
    </td>
</tr>
<tr>
    <td>Tugas</td>
    <td>:</td>
    <td>
        <input type='text' name='tugas'></td>
    </tr>
    <tr>
    <td>Uts</td>
    <td>:</td>
    <td>
        <input type='text' name='uts'></td>
</tr>
    </td>
</tr>
<tr>
    <td>Uas</td>
    <td>:</td>
    <td>
        <input type='text' name='uas'></td>
    </tr>
    <tr>
    <td>Nilai akhir</td>
    <td>:</td>
    <td>
        <input type='text' name='nilaiakhir'></td>
</tr>
    </td>
</tr>

<tr><td colspan='3'><input type='submit' name='submit' value='simpan'></td></tr>
</form>
</table></center>
</body>
</html>
<!-- Read atau menampilkan data dari database -->
  <center><table border="1">
    <tr>
      <th>NPM</th> 
      <th>Nama Mahasiswa</th>
      <th>Kode  Matkul</th>
      <th>Nama Matkul</th>
      <th>Tahun Ajaran</th>
      <th>Kehadiran</th>
      <th>tugas</th>
      <th>Uts</th>
      <th>Uas</th>
      <th>Nilai Akhir</th>

      <th colspan="2">Aksi</th>
    </tr>
<?php
    // Tampilkan semua data
    $q = $koneksi->query("SELECT * FROM viewnilaiakhir");
$nopol = '1'; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      
      <td><?= $dt['npm'] ?></td>
      <td><?= $dt['nmms'] ?></td>
      <td><?= $dt['kdmk'] ?></td>
      <td><?= $dt['nmmk'] ?></td>
      <td><?= $dt['tahunakademik'] ?></td>
      <td><?= $dt['kehadiran'] ?></td>
      <td><?= $dt['tugas'] ?></td>
      <td><?= $dt['uts'] ?></td>
      <td><?= $dt['uas'] ?></td>
      <td><?= $dt['nilaiakhir'] ?></td>

      <td><a href="update.php?id=<?=$dt['npm']?>">Ubah</a></td>
      <td><a href="delete.php?id=<?=$dt['npm'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table></center>
</body>
</html>
