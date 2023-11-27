
<?php
// Simulasi data orang tua dan anak
$orangTua = array(
    array('nama' => 'Orang Tua 1', 'anak' => array('nama' => 'Anak 1', 'nilai' => 80)),
    array('nama' => 'Orang Tua 2', 'anak' => array('nama' => 'Anak 2', 'nilai' => 90)),
    array('nama' => 'Orang Tua 3', 'anak' => array('nama' => 'Anak 3', 'nilai' => 70))
);

// Mendapatkan nilai anak berdasarkan nama orang tua
function getNilaiAnak($orangTua, $namaOrangTua) {
    foreach ($orangTua as $data) {
        if ($data['nama'] === $namaOrangTua) {
            return $data['anak']['nilai'];
        }
    }
    return null; // Jika nama orang tua tidak ditemukan
}

// Contoh penggunaan
$namaOrangTua = 'Orang Tua 1';
$nilaiAnak = getNilaiAnak($orangTua, $namaOrangTua);

if ($nilaiAnak !== null) {
    echo "Nilai anak dari $namaOrangTua: $nilaiAnak";
} else {
    echo "Orang tua dengan nama $namaOrangTua tidak ditemukan.";
}
?>
