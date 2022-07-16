<html>

    <head>
        <title>Selamat Datang</title>
    </head>

    <body>
        <center><h1>TAMBAH PRODUK</h1></center>
        <ul>
            <li><a href="main_page_adm.php">Kembali</a></li>
        </ul>
        <center>
            <div>
            <?php while($row = $this->ml->fetch($data)){
                $id = $row["id_barangg"];
                // echo $id;
                echo "
                    <form method='post' >
                        <div class='input_field'>
                            <label >Nama Barang</label><br>
                            <input type='text' name='inp_namaBrg' class='text_input' value='".$row["db_namabarang"]."'><br>
                            <label >Harga Barang</label><br>
                            <input type='text' name='inp_hargaBrg' class='text_input' value='".$row["db_hargabarang"]."'><br>
                            <label >Deskripsi</label><br>
                            <input type='text' name='inp_deskBrg' class='text_input' value='".$row["db_deskripsibarang"]."'><br>
                            <label >Jumlah Barang</label><br>
                            <input type='text' name='inp_jumlahBrg' class='text_input' value='".$row["db_jumlahbarang"]."'><br>
                            <input type='submit' name='inp_submit' class='button_submit' value='EDIT'>
                        </div>
                    </form>
                ";
            }?>
            </div>
        </center>
    </body>
    
    
</html>

<?php
	if (isset($_POST["inp_submit"])) {
		$cl2 = new controller_adm();
		$cl2->editBrg($id);
	}
?>