<?php

    include "controller/controller_adm.php";

    $cl = new controller_adm();

    if (isset($_GET["buat"])) {
		$cl->view_daftar(); 
	} else {
        $cl->view_masuk();
    }
    
?>