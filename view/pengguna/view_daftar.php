<html>

    <head>
        <title>Selamat Datang</title>
    </head>

    <body>
        <h1>REGISTER ANGGOTA ISC</h1>
        <center><h1>INFORMASI PENGGUNA</h1></center>
        <center>
            <div>
                <form action="" method="post" class="">
                    <div class="input_field">
                        <label for="">Nama Lengkap</label><br>
                        <input type="text" name="inp_namaLengkap" class="text_input"><br>
                        <label for="">Nama Pengguna</label><br>
                        <input type="text" name="inp_namaPengguna" class="text_input"><br>
                        <label for="">Nomor Telepon</label><br>
                        <input type="text" name="inp_noTelp" class="text_input"><br>
                        <label for="">Alamat</label><br>
                        <input type="text" name="inp_alamat" class="text_input"><br>
                        <label for="">Kata Sandi</label><br>
                        <input type="Password" name="inp_sandi" class="text_input"><br>
                        <input type="submit" name="inp_submit" class="button_submit" value="DAFTAR">
                    </div>
                </form>
            </div>
        </center>
    </body>
    
</html>

<?php
	if (isset($_POST["inp_submit"])) { 
		$cl2 = new controller();
		$cl2->daftar();
	}
?>