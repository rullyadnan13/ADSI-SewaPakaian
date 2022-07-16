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
                width: 20%;
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
                margin-left: 20%;
                /* background-color: aquamarine; */
                padding: 20px;
            }
            .main h1{
                padding-bottom: 20px;
                border-bottom: 2px solid black;
                text-transform: uppercase;
            }
            /* tabel */
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
                    <li><a href="main_page_adm.php?permintaanAnggota">Permintaan Anggota</a></li>
                    <li><a href="main_page_adm.php">Kembali</a></li>
                </ul>
            </div>
        </aside>

        <article>
            <div class="main">
                <center><h1>ANGGOTA</h1></center>
                <div class="katalog">
                    <table class="list">
                        <?php while($row = $this->ml->fetch($data)){
                            echo "
                                <tr>
                                    <td><span>ID: <br></span>".$row["id_anggota"]."</td>
                                    <td><span>Nama Lengkap: <br></span>".$row["db_namalengkap"]."</td>
                                    <td><span>Nama Pengguna: <br></span>".$row["db_namapengguna"]."</td>
                                    <td><span>No Telepon: <br></span>".$row["db_nomortelp"]."</td>
                                    <td><span>Alamat: <br></span>".$row["db_alamatpengguna"]."</td>
                                </tr>
                            ";
                        }?>
                    </table>
                </div>
            </div>            
        </article>
        
    </body>
    
    
</html>