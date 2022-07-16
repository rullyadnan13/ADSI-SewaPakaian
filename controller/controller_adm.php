<?php

    include "model/model_adm.php";

    class controller_adm{

        public $ml;

        function __construct(){
			$this->ml = new model(); 
		}

        function view_masuk(){
			include "view/adm/view_masuk_adm.php";
		}

        function view_daftar(){
			include "view/adm/view_daftar_adm.php";
		}

        function view_utama(){
			include "view/adm/view_utama_adm.php";
		}

        function view_produk(){
            $data = $this->ml->Brg();
			include "view/adm/view_produk_adm.php";
		}

        function view_tambahProduk(){
			include "view/adm/view_tambahProduk_adm.php";
		}

        function view_editProduk(){
            $id = $_GET['editProduk'];
            $data = $this->ml->idBrg($id);
			include "view/adm/view_editProduk_adm.php";
		}

        function view_anggota(){
            $data = $this->ml->anggota();
			include "view/adm/view_anggota_adm.php";
		}


// admin ========================================================================================================

        function daftar(){
            $nama = $_POST["inp_namaAdmin"];
            $sandi = $_POST["inp_sandi"];
            $id;

			$data = $this->ml->pilih_id();
			if ($data->num_rows > 0) {
                while($row = $this->ml->fetch($data)){
					$data_id = $this->ml->pilih_maksId($row['id_admin']);
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

			$tambah = $this->ml->tambah($id, $nama, $sandi);
			header("location:main_login_adm.php");	
		}

        function masuk(){
            session_start();

            $nama = $_POST["inp_namaAdmin"];
            $sandi = $_POST["inp_sandi"];

            $id = $this->ml->pilih_idAdmin($nama);
            $_SESSION['id'] = $id;

            $masuk = $this->ml->masuk_admin($nama, $sandi);
            if ($masuk == '1') {
                header("location:main_page_adm.php");
            } else {
                header("location:main_login_adm.php");
            }

		}

        
// barang ========================================================================================================
        function tambahBrg(){
            $namaBrg = $_POST["inp_namaBrg"];
            $hargaBrg = $_POST["inp_hargaBrg"];
            $deskBrg = $_POST["inp_deskBrg"];
            $jumlahBrg = $_POST["inp_jumlahBrg"];
            $id;

            $data = $this->ml->pilih_idBrg();
            if ($data->num_rows > 0) {
                while($row = $this->ml->fetch($data)){
                    $data_id = $this->ml->pilih_maksIdBrg($row['id_barangg']);
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

            $tambah = $this->ml->tambahBrg($id, $namaBrg, $hargaBrg, $deskBrg, $jumlahBrg);
            header("location:main_page_adm.php");	
        }

        function editBrg($id){
            $namaBrg = $_POST["inp_namaBrg"];
            $hargaBrg = $_POST["inp_hargaBrg"];
            $deskBrg = $_POST["inp_deskBrg"];
            $jumlahBrg = $_POST["inp_jumlahBrg"];

            $this->ml->editBrg($id, $namaBrg, $hargaBrg, $deskBrg, $jumlahBrg);
            header("location:main_page_adm.php");
        }

        function hapusProduk($id){
			$this->ml->hapusProduk($id);
			header("location:main_page_adm.php");
		}


// anggota ========================================================================================================
        function view_permintaanAnggota_adm(){
            $data = $this->ml->permintaanAnggota();
            include "view/adm/view_permintaanAnggota_adm.php";
        }

        function terimaAnggota($id){
			$terima = $this->ml->terimaAnggota($id);
			header("location:main_page_adm.php");
		}

        function __destruct(){

		}
    }

    

?>