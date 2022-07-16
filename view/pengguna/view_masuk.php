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
            .bg{
                /* padding: 25px; */
                position: relative;
                background-color: orange;
                width: 100%;
                height: 100%;
            }
            .left{
                position: absolute;
                top: 10%;
                bottom: 10%;
                left: 2%;
                background-color: #fff;
                width: 50%;
                
            }
            .right{
                border-left: 5px solid black;
                position: absolute;
                top: 10%;
                bottom: 10%;
                right: 2%;
                background-color: #fff;
                width: 50%;
            }
            h1{
                position: absolute;
                top: 30%;
                font-size: 50px;
                margin-left: 40px;
                color: black;
                font-weight: bold;
            }
            h2{
                position: absolute;
                margin-left: 20px;
                margin-top: 20px;
                font-size: 40px;
            }
            .form_login{
                position: absolute;
                /* background-color: grey; */
                top: 35%;
                width: 100%;
            }
            input{
                width: 80%;
                margin-top: 8px;
                margin-bottom: 20px;
                font-size: 15px;
            }
            label{
                font-size: 15px;
            }
            input, label{
                margin-left: 10%;
            }
            .button_submit{
                margin-left: 70%;
                width: 20%;
                margin-bottom: 5px;
                background-color: orange;
                padding: 3px 6px;
                border: none;
            }
            .signup{
                width: 20%;
                text-align: center;
                margin-left: 70%;
            }
        </style>
    </head>

    <body>
        <div class="bg">
            <div class="left">
                <h1>INDAH <br>SANJOYO <br>COLLEXTIONS</h1>
            </div>
            <div class="right">
                <h2>MASUK ANGGOTA <br>ISC</h2>
                    <div>
                        <div class="form_login">
                        <form action="" method="post" class="">
                            <div class="input_field">
                                <label for="">Nama Pengguna</label><br>
                                <input type="text" name="inp_namaPengguna" class="text_input"><br>
                                <label for="">Kata Sandi</label><br>
                                <input type="password" name="inp_sandi" class="text_input"><br>
                                <input type="submit" name="inp_submit" class="button_submit" value="MASUK">
                                <div class="signup">
                                    <a href="main_login.php?buat" class="signup_link">Buat akun disini</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
        
    </body>
    
</html>

<?php
	if (isset($_POST["inp_submit"])) { 
		$cl2 = new controller();
		$cl2->masuk();
	}
?>