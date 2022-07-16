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
                font-size: 30px;
            }
            .main h2{
                padding-top: 20px;
                padding-bottom: 20px;
                border-bottom: 2px solid black;
                text-transform: uppercase;
                font-size: 20px;
            }
            .main p{
                padding-top: 20px;
                padding-bottom: 20px;
                text-align: center;
            }
            .gambar_sampul{
                text-align: center;
                padding: 20px 0;
            }
            .gambar_produk{
                text-align: center;
            }
            .gambar_produk img{
                padding: 20px 0;
            }
        </style>
    </head>

    <body>
        <aside>
            <div class="sidebar">
                <h3><?php echo "Selamat Datang <br>" . $_SESSION["nama"]; ?></h3>
                <ul>
                    <li><a href="main_page.php">Beranda</a></li>
                    <li><a href="main_page.php?katalog">Katalog Produk</a></li>
                    <li><a href="main_page.php?pemesanan">Pemesanan</a></li>
                    <li><a href="main_page.php?pengaturan">Pengaturan</a></li>
                    <li><a href="exit.php">Keluar</a></li>
                </ul>
            </div>
        </aside>
        
        <article>
            <div class="main">
                <center><h1>Indah Sanjoyo Collextions</h1></center>
                <div class="gambar_sampul">
                    <img src="images/main-pict-1.jpeg" alt="sampul" class="img">
                </div>
                <p>
                Indah Sanjoyo Collextions (ISC) adalah sebuah toko persewaan pakaian kesenian jaranan di Kabupaten Trenggalek, Jawa Timur. Persewaan ini telah berdiri sejak tahun 2015. ISC menyewakan pakaian kesenian seperti kostum tari Jaranan, kostum Reog, dll. Jasa sewa yang disediakan selalu dikembangkan mengikuti perkembangan kesenian yang ada. Adapun visi dan misi dari Indah Sanjoyo Collextions adalah memberikan pelayanan terbaik kepada para pelanggan serta memberikan harga dan kualitas yang terbaik.
                </p>
                <center><h2>Pakaian Tradisional</h2></center>
                <p>Kami menyewakan berbagai macam pakaian kesenian untuk Anda</p>
                <div class="gambar_produk">
                    <img src="images/prod-1.jpeg" alt="sampul" class="img"><br>
                    <img src="images/prod-2.jpeg" alt="sampul" class="img"><br>
                    <img src="images/prod-3.jpeg" alt="sampul" class="img"><br>
                    <img src="images/prod-4.jpeg" alt="sampul" class="img"><br>
                    <img src="images/prod-5.jpeg" alt="sampul" class="img"><br>
                </div>
                <p>"Kami memberikan pelayanan yang terbaik kepada Anda serta memberikan harga dan kualitas yang terbaik pula."</p>
                <center><h2>Kunjungi Kami</h2></center>
                <p>Jln. Kanjeng Jimat Gg.Dahlia No.08 RT.25 RW.08 Utara Pasar Burung Ke Timur 400 Meter Utara Jalan. (Ndosari-Surodakan-Trenggalek)</p>
            </div>
        </article>
        
    </body>
    
</html>