<?php
    
    class model{

        public $conn;

        function __construct(){
			$this->conn = new mysqli("localhost", "root", "", "sewapakaianisc");
			if ($this->conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
		}

        function execute($query){
			return $this->conn->query($query);
		}

        function fetch($var){
			return $var->fetch_assoc();
		}


// data member ========================================================================================================
        function pilih_id(){
			$query = "select id_admin from tb_admin";
			return $this->execute($query);
		}

        function pilih_idAdmin($nama){
			$query = "select id_admin from tb_admin where db_namaadmin='$nama'";
			return $this->execute($query);
		}

        function pilih_maksId($id){
			$query = "select max(id_admin) as num_id from tb_admin where id_admin='$id'";
			return $this->execute($query);
		}

        function tambah($id, $nama, $sandi){
			$query = "insert into tb_admin values ('$id', '$nama', '$sandi')";
			return $this->execute($query);
		}

        function masuk_admin($nama, $sandi){
			$query = "SELECT * FROM tb_admin WHERE db_namaadmin='$nama' and db_sandiadmin='$sandi'";
            $result = $this->execute($query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    return '1';
                }
            }
            else{   
                return '0';
            }
		}


// data barang ========================================================================================================
		function Brg(){
			$query = "select * from tb_barang";
			return $this->execute($query);
		}

		function idBrg($id){
			$query = "select * from tb_barang where id_barangg='$id'";
			return $this->execute($query);
		}


		function pilih_idBrg(){
			$query = "select id_barangg from tb_barang";
			return $this->execute($query);
		}

		function pilih_maksIdBrg($id){
			$query = "select max(id_barangg) as num_id from tb_barang where id_barangg='$id'";
			return $this->execute($query);
		}

		function tambahBrg($id, $namaBrg, $hargaBrg, $deskBrg, $jumlahBrg){
			$query = "insert into tb_barang values ('$id', '$namaBrg', '$hargaBrg', '$deskBrg', '$jumlahBrg')";
			return $this->execute($query);
		}

		function editBrg($id, $namaBrg, $hargaBrg, $deskBrg, $jumlahBrg){
			$query = "update tb_barang set db_namabarang='$namaBrg', db_hargabarang='$hargaBrg', db_deskripsibarang='$deskBrg', db_jumlahbarang='$jumlahBrg' where id_barangg='$id'";
			return $this->execute($query);
		}

		function hapusProduk($id){
			$query = "delete from tb_barang where id_barangg='$id'";
			return $this->execute($query);
		}


// data barang ========================================================================================================
		function anggota(){
			$query = "select * from tb_anggota where db_statusanggota='1'";
			return $this->execute($query);
		}

		function permintaanAnggota(){
			$query = "select * from tb_anggota where db_statusanggota='0'";
			return $this->execute($query);
		}

		function terimaAnggota($id){
			$query = "update tb_anggota set db_statusanggota='1' where id_anggota='$id'";
            $result = $this->execute($query);
		}


        function __destruct(){
            
		}



    }




?>