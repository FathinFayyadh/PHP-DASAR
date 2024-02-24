// carikan nilai mahasiswa dalam kode berikut
// inputkan nama,matkul,jurusn,nilai tugas,nilai absen,nilai akhir.
// lalu kalikan semua nilai dan bagi dengan 20%,ketika hasilnya 70 ke atas maka hasilnya A,seterus nya B,C,D dan di bawah 50 dinyatakan E,

<?php

// Input data dari pengguna
echo "Masukkan Nama Mahasiswa: ";
$nama = readline();
echo "Masukkan Mata Kuliah: ";
$matkul = readline();
echo "Masukkan Jurusan: ";
$jurusan = readline();
echo "Masukkan Nilai Tugas: ";
$nilai_tugas = (float)readline();
echo "Masukkan Nilai Absen: ";
$nilai_absen = (float)readline();
echo "Masukkan Nilai Akhir: ";
$nilai_akhir = (float)readline();

// Menghitung nilai total
$total_nilai = ($nilai_tugas * 0.3) + ($nilai_absen * 0.2) + ($nilai_akhir * 0.5);

// Menentukan grade berdasarkan nilai total
if ($total_nilai >= 70) {
    $grade = 'A';
} elseif ($total_nilai >= 60) {
    $grade = 'B';
} elseif ($total_nilai >= 50) {
    $grade = 'C';
} elseif ($total_nilai >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// Output nilai mahasiswa
echo "Nilai Mahasiswa:\n";
echo "Nama: $nama\n";
echo "Mata Kuliah: $matkul\n";
echo "Jurusan: $jurusan\n";
echo "Nilai Tugas: $nilai_tugas\n";
echo "Nilai Absen: $nilai_absen\n";
echo "Nilai Akhir: $nilai_akhir\n";
echo "Nilai Total: $total_nilai\n";
echo "Grade: $grade\n";

?>
