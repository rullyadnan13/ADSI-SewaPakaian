<?php

    include "controller/controller.php";

    $cl3 = new controller();


// katalog ========================================================================================================
    if (isset($_GET["katalog"])) {
		$cl3->view_katalog(); 
	} else if (isset($_GET["lengkap"])) {
        $id = $_GET["id_barang"];
		$cl3->view_katalogLengkap($id); 
	} else if (isset($_GET["sewa"])) {
        $id = $_GET["id_barang"];
		$cl3->view_sewa($id); 
	} else if (isset($_GET["ringkasan"])) {
        $id = $_GET["id_barang"];
		$jumlahBrg = $_GET["jumlahBrg"];
		$durasi = $_GET["durasi"];
		$cl3->view_ringkasan($id, $jumlahBrg, $durasi); 
	} else 
    
    
// pemesanan ========================================================================================================
    if (isset($_GET["pemesanan"])) {
		$cl3->view_pemesanan(); 
	} else 
    
    
// pengaturan ========================================================================================================
    if (isset($_GET["pengaturan"])) {
		$cl3->view_pengaturan(); 
	} else {
        $cl3->view_utama();
    }

    
    
?>