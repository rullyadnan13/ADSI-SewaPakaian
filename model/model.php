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


// anggota ========================================================================================================
        function pilih_id(){
			$query = "select id_anggota from tb_anggota";
			return $this->execute($query);
		}

        function pilih_idAnggota($namaPengguna){
			$query = "select id_anggota from tb_anggota where db_namapengguna='$namaPengguna'";
			return $this->execute($query);
		}

		function pilih_anggota($namaPengguna){
			$query = "select * from tb_anggota where db_namapengguna='$namaPengguna'";
			return $this->execute($query);
		}

        function pilih_maksId($id){
			$query = "select max(id_admin) as num_id from tb_admin where id_admin='$id'";
			return $this->execute($query);
		}

        function tambah($id, $namaLengkap, $namaPengguna, $sandi, $noTelp, $alamat, $statusAnggota){
			$query = "insert into tb_anggota values ('$id', '$namaLengkap', '$namaPengguna', '$sandi', '$noTelp', '$alamat', '$statusAnggota')";
			return $this->execute($query);
		}

        function masuk_anggota($namaPengguna, $sandi){
			$query = "SELECT * FROM tb_anggota WHERE db_namapengguna='$namaPengguna' and db_sandipengguna='$sandi' and db_statusanggota = '1'";
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


// katalog ========================================================================================================
		function katalog(){
			$query = "select * from tb_barang";
			return $this->execute($query);
		}

		function katalogLengkap($id){
			$query = "select * from tb_barang where id_barangg='$id'";
			return $this->execute($query);
		}

		function pilih_idSewa(){
			$query = "select id_sewabarang from tb_penyewaan";
			return $this->execute($query);
		}

		
		function pilih_maksIdSewa($id){
			$query = "select max(id_sewabarang) as num_id from tb_penyewaan where id_sewabarang='$id'";
			return $this->execute($query);
		}
		
		function tambahSewa($a, $b, $c, $d, $e, $f, $g){
			$query = "insert into tb_penyewaan values ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
			return $this->execute($query);
		}
		
		
// pemesanan ========================================================================================================
		function listPemesanan($namaPengguna){
			$query = "select * from view_sewa where db_namapenggunaa='$namaPengguna'";
			return $this->execute($query);
		}

        function __destruct(){
            
		}

    }



?>