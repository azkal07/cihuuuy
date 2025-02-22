<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'akademikazkal');

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

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

    // Query pertama
    $queryinput = "INSERT INTO mahasiswaazkal (npm, nmms, jenkel, prodi, alamat) VALUES ('$npm', '$nmms', '', '', '')";

    // Query kedua
    $queryinput1 = "INSERT INTO ambilkuliahazkal (npm, kdmk, tahunakademik, kehadiran, tugas, uts, uas) VALUES ('$npm', '$kdmk', '$tahunakademik', '$kehadiran', '$tugas', '$uts', '$uas')";

    // Eksekusi query
    $q1 = mysqli_query($koneksi, $queryinput);
    $q2 = mysqli_query($koneksi, $queryinput1);

    if ($q1 && $q2) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan'); window.location.href='crud.php'</script>";
    } else {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan: " . mysqli_error($koneksi) . "'); window.location.href='crud.php'</script>";
    }
} else {
    header('Location: crud.php');
}
?>
