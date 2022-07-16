
<html>

    <head>
        <title>Selamat Datang</title>
    </head>

    <body>
        <center><h1>MASUK ADMIN ISC</h1></center>
        <center>
            <div>
                <form action="" method="post" class="">
                    <div class="input_field">
                        <label for="">Nama Admin</label><br>
                        <input type="text" name="inp_namaAdmin" class="text_input"><br>
                        <label for="">Kata Sandi</label><br>
                        <input type="password" name="inp_sandi" class="text_input"><br>
                        <input type="submit" name="inp_submit" class="button_submit" value="MASUK">
                        <div class="signup">
                            <a href="main_login_adm.php?buat" class="signup_link">Buat akun disini</a>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </body>
    
</html>

<?php
	if (isset($_POST["inp_submit"])) { 
		$cl2 = new controller_adm();
		$cl2->masuk();
	}
?>