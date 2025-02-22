<?php
$koneksi=mysqli_connect('localhost','root','','akademikazkal');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $koneksi->query("SELECT * FROM viewnilaiakhir WHERE npm = '$id'");
foreach ($q as $dt) :
  ?>

  <h2>Halaman Ubah Data</h2>
<form action="proses_update.php" method="post">
    <input type="text" name="npm" value="<?= $dt['npm'] ?>">
    <input type="text" name="nmms" value="<?= $dt['nmms'] ?>">
    <input type="text" name="kdmk" value="<?= $dt['kdmk'] ?>">
    <input type="text" name="nmmk" value="<?= $dt['nmmk'] ?>">
    <input type="text" name="tahunakademik" value="<?= $dt['tahunakademik'] ?>">
    <input type="text" name="kehadiran" value="<?= $dt['kehadiran'] ?>">
    <input type="text" name="tugas" value="<?= $dt['tugas'] ?>">
    <input type="text" name="uts" value="<?= $dt['uts'] ?>">
    <input type="text" name="uas" value="<?= $dt['uas'] ?>">
    <input type="text" name="nilaiakhir" value="<?= $dt['nilaiakhir'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}
?>
