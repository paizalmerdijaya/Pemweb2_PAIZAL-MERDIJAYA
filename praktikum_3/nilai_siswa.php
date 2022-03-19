<?php

    require_once "libfungsi.php";


    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];
    $proses = $_POST['proses'];
    $nilai_akhir = (0.3 * $uts) + (0.35 * $uas) + (0.35 * $tugas);
    
    

    if (!empty($proses)) {
        echo '<strong>HASIL</strong>';
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $matkul;
        echo '<br/>Nilai UTS : ' . $uts;
        echo '<br/>Nilai UAS : ' . $uas;
        echo '<br/>Nilai Tugas/Praktikum : ' .$tugas;
    }


    
    $hasil_ujian    = kelulusan($nilai_akhir);
    $grade_siswa    = grade($nilai_akhir);
    $predikat_siswa = predikat($grade_siswa);
    

    echo "<br/> GRADE SISWA : " . $grade_siswa;
    echo "<br/> PREDIKAT SISWA : " . $predikat_siswa;
    echo "<br/> SISWA DINYATAKAN : " . $hasil_ujian;

?>