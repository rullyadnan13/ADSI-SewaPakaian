<html>

    <head>
        <title>Selamat Datang</title>
    </head>

    <body>
        <h1>REGISTER ADMIN ISC</h1>
        <center><h1>INFORMASI ADMIN</h1></center>
        <center>
            <div>
                <form action="" method="post" class="">
                    <div class="input_field">
                        <label for="">Nama Admin</label><br>
                        <input type="text" name="inp_namaAdmin" class="text_input"><br>
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
		$cl2 = new controller_adm();
		$cl2->daftar();
	}
?>