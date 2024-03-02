<?php
$customer = $_POST['customer'];
$radio = $_POST['radio'];
$jumlah = $_POST['jumlah'];

if(isset($_POST['submit'])){

    // inisialisasi harga
    $harga = 0;

    // tentukan harga berdasarkan barang yang dipilih
    switch($radio){
        case 'tv':
            $harga = 4200000;
            break;
        case 'kulkas':
            $harga = 3100000;
            break;
        case 'mesin_cuci':
            $harga = 3800000;
            break;
        default:
            $harga = 0;
            break;
    }

    // konversi jumlah menjadi integer
    $jumlah = intval($jumlah);

    // hitung total harga
    $total_harga = $harga * $jumlah;

    // tampilkan harga
    // echo "<h2>Total Harga untuk $jumlah $barang adalah: Rp. " . number_format($total_harga, 0, ',', '.') . ",-</h2>";
}

//cetak hasil
echo 'Nama Customer : ' . $customer . '<br>';
echo 'Produk pilihan : ' . $radio . '<br>';
echo 'Jumlah beli : ' . $jumlah . '<br>';
echo 'Total : ' . $total_harga;

?>