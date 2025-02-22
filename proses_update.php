<?php
$koneksi=mysqli_connect('localhost','root','','akademikazkal');
if (isset($_POST['submit'])) {
  $npm = $_POST['npm'];
  $nmms = $_POST['nmms'];
  $kdmk= $_POST['kdmk'];
  $nmmk = $_POST['nmmk'];
  $tahunakademik = $_POST['tahunakademik'];
  $kehadiran = $_POST['kehadiran'];
  $tugas = $_POST['tugas'];
  $uts = $_POST['uts'];
  $uas = $_POST['uas'];
  $nialiakhir = $_POST['nilaiakhir'];

echo "<br>";
echo"$npm";echo"$nmms";echo"$kdmk";echo"$nmmk";echo"$tahunakademik";echo"$kehadiran";echo"$tugas";echo"$uts";echo"$uas";echo"$nilaiakhir";echo "<br>";
$q =$koneksi->query("UPDATE mahasiswaazkal SET nmms='$nmms',kdmk='$kdmk',nmmk='$nmmk',tahunakademik='$tahunakademik',kehadiran='$kehadiran',tugas='$tugas',uts='$uts',uas='$uas',nilaiakhir='$nilaiakhir' WHERE npm='$npm'");
if ($q){
    // pesan jika data berubah
    echo "<script>alert('Data mahasiswa berhasil diubah'); window.location.href='crud.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data mahasiswa gagal diubah'); window.location.href='crud.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman crud
  header('Location: crud.php');
}
?>

