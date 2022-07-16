<?php

    include "model/model.php";
    session_start();

    class controller{

        public $ml;

        function __construct(){
			$this->ml = new model(); 
		}

        function view_masuk(){
			include "view/pengguna/view_masuk.php";
		}

        function view_daftar(){
			include "view/pengguna/view_daftar.php";
		}

        function view_utama(){
			include "view/pengguna/view_utama.php";
		}

        function view_katalog(){
            $data = $this->ml->katalog();
			include "view/pengguna/view_produk.php";
		}

        function view_katalogLengkap($id){
            $data = $this->ml->katalogLengkap($id);
            include "view/pengguna/view_produkLengkap.php";
        }

        function view_sewa($id){
            $data = $this->ml->katalogLengkap($id);
			include "view/pengguna/view_penyewaan.php";
		}

        


// anggota ========================================================================================================
        function daftar(){
            $namaLengkap = $_POST["inp_namaLengkap"];
            $namaPengguna = $_POST["inp_namaPengguna"];
            $noTelp = $_POST["inp_noTelp"];
            $alamat = $_POST["inp_alamat"];
            $sandi = $_POST["inp_sandi"];
            $id;

			$data = $this->ml->pilih_id();
			if ($data->num_rows > 0) {
                while($row = $this->ml->fetch($data)){
					$data_id = $this->ml->pilih_maksId($row['id_anggota']);
					if ($data_id->num_rows > 0) {
						while($row = $this->ml->fetch($data_id)){
							$idtemp = (int)$row['num_id'];
							$idtemp++;
							$idtemp2 = str_pad($idtemp,5,"0", STR_PAD_LEFT);
							$id = $idtemp2;
						}
					}	
						
                }
            }else{
				$id = '00001';	
			}

            $statusAnggota = '0';
			$tambah = $this->ml->tambah($id, $namaLengkap, $namaPengguna, $sandi, $noTelp, $alamat, $statusAnggota);
			header("location:main_login.php");	
		}

        function masuk(){
            $namaPengguna = $_POST["inp_namaPengguna"];
            $sandi = $_POST["inp_sandi"];
            $_SESSION["nama"] = $namaPengguna;

            $id = $this->ml->pilih_idAnggota($namaPengguna);
            $_SESSION["id"] = $id;


            $masuk = $this->ml->masuk_anggota($namaPengguna, $sandi);
            if ($masuk == '1') {
                header("location:main_page.php");
            } else {
                header("location:main_login.php");
            }

		}


// katalog ========================================================================================================
        function keranjang($id, $harga){
            $idBarang = $id;
            $namaPengguna = $_SESSION["nama"];
            $jumlahBrg = $_POST["inp_jumlahBrg"];
            $durasi = $_POST["inp_durasi"];
            $hargaTotal = $harga * (int)$jumlahBrg * (int)$durasi;
            $id;

            // $data = $this->ml->pilih_idAnggota($namaPengguna);
            // while($row = $this->ml->fetch($data)){
            //     $id_anggota = $row["id_anggota"];
            // }

            $data2 = $this->ml->pilih_idSewa();
            if ($data2->num_rows > 0) {
                while($row = $this->ml->fetch($data2)){
                    $data_id = $this->ml->pilih_maksIdSewa($row['id_sewabarang']);
                    if ($data_id->num_rows > 0) {
                        while($row = $this->ml->fetch($data_id)){
                            $idtemp = (int)$row['num_id'];
                            $idtemp++;
                            $idtemp2 = str_pad($idtemp,5,"0", STR_PAD_LEFT);
                            $id = $idtemp2;
                        }
                    }	
                        
                }
            }else{
                $id = '00001';	
            }

            $statussewa = '0';
            $this->ml->tambahSewa($id, $idBarang, $jumlahBrg, $hargaTotal, $durasi, $statussewa, $namaPengguna);
            header("location:main_page.php");	
        }
        

// katalog ========================================================================================================
        function view_pemesanan(){
            $dataPesan = $this->ml->listPemesanan($_SESSION["nama"]);
            include "view/pengguna/view_pemesanan.php";
        }

        function __destruct(){

		}
    }

?>