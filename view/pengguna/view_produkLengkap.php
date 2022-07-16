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
            .katalog{
                padding: 20px 0 ;
            }
            .main h2{
                font-size: 20px;
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
                <center><h1>PRODUK</h1></center>
                <div class="katalog">
                    <?php while($row = $this->ml->fetch($data)){
                        echo "
                            <h2>Nama Barang</h2>
                            <p>".$row["db_namabarang"]."</p>
                            <br>
                            <h2>Ketersediaan</h2>
                            <p>".$row["db_jumlahbarang"]."</p>
                            <br>
                            <h2>Harga</h2>
                            <p>Rp".$row["db_hargabarang"].",-</p>
                            <br>
                            <h2>Deskripsi</h2>
                            <p>".$row["db_deskripsibarang"]."</p>
                            <br>
                        ";
                    }?>
                </div>
            </div>
            
        </article>
    </body>
    
    
</html>