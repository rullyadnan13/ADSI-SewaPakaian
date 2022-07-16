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
        </style>
    </head>

    <body>
        <aside>
            <div class="sidebar">
                <ul>
                    <li><a href="main_page_adm.php">Beranda</a></li>
                    <li><a href="main_page_adm.php?produk">Produk</a></li>
                    <li><a href="main_page_adm.php?anggota">Anggota</a></li>
                    <li><a href="main_page_adm.php?pemesanan">Pemesanan</a></li>
                    <li><a href="main_page_adm.php?pengaturan">Pengaturan</a></li>
                    <li><a href="exit_adm.php">Keluar</a></li>
                </ul>
            </div>
        </aside>

        <article>
            <div class="main">
                <center><h1>SELAMAT DATANG ADMIN</h1></center>
            </div>
        </article>
    </body>
    
    
</html>