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
            .list{
                margin: 20px 0;
                width: 100%;
                border-collapse: collapse;
                background-color: coral;
                /* border: 1px solid black; */
                ;
            }
            tr td{
                height: 50px;
                padding: 10px;
                /* border: 1px solid black; */
            }
            tr:nth-child(even) {
                background-color: orangered;
            }
            table span{
                font-size: 12px;
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
                <div class="katalog">
                    <table class='list'>
                    <?php 
                        while($row = $this->ml->fetch($dataPesan)){
                            echo "
                                <tr>
                                    <td class='t_nama'><span>Nama: <br></span>".$row["db_namabarang"]."</td>
                                    <td class='t_jml'><span>Jumlah: <br></span>".$row["db_jumlahsewa"]." buah</td>
                                    <td class='t_drs'><span>Durasi: <br></span>".$row["db_durasi"]." hari</td>
                                    <td class='t_hrg'><span>Harga/hari/buah: <br></span>Rp".$row["db_hargabarang"].",-</td>
                                    <td class='t_ttl'><span>Total: <br></span>Rp".$row["db_hargatotal"].",-</td>
                                </tr>
                            ";
                    }?>
                    </table>
                </div>
            </div>
        </article>
    </body>
</html>