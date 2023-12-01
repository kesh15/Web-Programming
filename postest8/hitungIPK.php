<?php
    $nilai_makul1 = $_POST['nilai_matkul1'];
    $nilai_akhir = $nilai_makul1; // Menginisialisasi nilai akhir dengan nilai dari mata kuliah pertama

    // Perhitungan nilai akhir
    for ($i = 2; isset($_POST['nilai_matkul'.$i]); $i++) {
        $nilai_makul = $_POST['nilai_matkul'.$i];
        $nilai_akhir += $nilai_makul; // Menambahkan nilai mata kuliah ke nilai akhir
    }

    // Rating kelulusan
    if ($nilai_akhir / $i > 1) { // Mengecek rata-rata nilai akhir
        $kelulusan = "Lulus";
    } else {
        $kelulusan = "Tidak Lulus";
    }
    
    // Hasil perhitungan
    echo "Nilai akhir: $nilai_akhir <br/>";
    echo "Keterangan Lulus: $kelulusan <br/>";
?>
