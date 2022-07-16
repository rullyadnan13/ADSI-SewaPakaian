<?php
    $durasi; 
?>
<html>

    <head>
        <title>Selamat Datang</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                text-decoration: none;
                list-style: none;
                font-family: 'Poppins', sans-serif;
            }
            body{
                box-sizing: border-box;
            }
            /* sidebar */
            .sidebar{
                position: fixed;
                background: salmon;
                width: 15%;
                height: 100%;
                top: 0;
                left: 0;
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
            }
            .sidebar h3{
                text-align: center;
                padding-top: 15px;
                padding-bottom: 15px;
                font-size: 20px;
                color: white;
                text-transform: uppercase;
            }
            .sidebar ul li{
                margin: 20px 0;
            }
            .sidebar ul li a{
                color: white;
                padding: 0 30px;
            }
            .sidebar ul li a:hover{
                color: red;
            }
            /* main */
            .main{
                margin-left: 15%;
                /* background-color: aquamarine; */
                padding: 20px;
            }
            .main h1{
                padding-bottom: 20px;
                border-bottom: 2px solid black;
                text-transform: uppercase;
            }
            form{
                /* background-color: lightgreen; */
                padding: 20px 0px;
            }
            form label{
                font-size: 15px;
                font-weight: bold;
            }
            form input{
                margin: 5px 0 15px;
                width: 35%;
                height: 30px;
                border-radius: 4px;
                text-align: center;
                font-size: 15px;
                border: 1px solid grey;
            }
            form .button_submit{
                width: 200px;
                border: 1px solid red;
            }
            form .button_submit:hover{
                background-color: red;
                color: white;
                border: none;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <aside>
            <div class="sidebar">
                <ul>
                    <li><a href="main_page.php">Kembali</a></li>
                </ul>
            </div>
        </aside>

        <article>
            <div class="main">
                <center><h1>PEMESANAN</h1></center>
                <center>
                <?php while($row = $this->ml->fetch($data)){
                    $id = $row["id_barangg"];
                    $harga = $row["db_hargabarang"];
                    echo "
                        <div>
                            <form method='post'>
                                <div class='input_field'>
                                    <label >Nama Barang</label><br>
                                    <input type='text' name='inp_namaBrg' class='text_input' value='".$row["db_namabarang"]."' disabled><br>
                                    <label >Harga Barang per Hari</label><br>
                                    <input type='text' name='inp_hargaBrg' class='text_input' value='Rp".$row["db_hargabarang"].",-' disabled><br>
                                    <label >Jumlah Barang (Maksimal ".$row["db_jumlahbarang"]."!)</label><br>
                                    <input type='text' name='inp_jumlahBrg' class='text_input'><br>
                                    <label >Durasi Sewa (Hari)</label><br>
                                    <input type='text' name='inp_durasi' class='text_input'><br>
                                    <input type='submit' name='inp_keranjang' class='button_submit' value='MASUKKAN KERANJANG'><br>
                                </div>
                            </form>
                        </div>
                    ";
                }?>
                </center>
            </div>
        </article>
        
        
        
    </body>
    
    
</html>

<?php
	if (isset($_POST["inp_keranjang"])) { 
		$cl2 = new controller();
		$cl2->keranjang($id, $harga);
	}
?>