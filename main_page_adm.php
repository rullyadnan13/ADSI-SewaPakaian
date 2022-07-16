<?php

    include "controller/controller_adm.php";

    $cl3 = new controller_adm();

	
// produk ========================================================================================================
    if (isset($_GET["produk"])) {
		$cl3->view_produk(); 
	} else if (isset($_GET["tambahProduk"])) {
		$cl3->view_tambahProduk(); 
	} else if (isset($_GET["editProduk"])) {
		$cl3->view_editProduk(); 
	} else if (isset($_GET["hapusProduk"])) {
		$id = $_GET["id_barang"];
		$cl3->hapusProduk($id); 
	} else 


// anggota ========================================================================================================
	if (isset($_GET["anggota"])) {
		$cl3->view_anggota(); 
	} else if (isset($_GET["permintaanAnggota"])) {
		$cl3->view_permintaanAnggota_adm(); 
	} else if (isset($_GET["terima"])) {
		$id = $_GET["id_anggota"];
		$cl3->terimaAnggota($id);  
	} else 
	
	
// pemesanan ========================================================================================================
	if (isset($_GET["pemesanan"])) {
		$cl3->view_pemesanan(); 
	} else 
	
	
// pengaturan ========================================================================================================	
if (isset($_GET["pengaturan"])) {
		$cl3->view_pengaturan(); 
	} else{
        $cl3->view_utama();
    }

    
    
?>