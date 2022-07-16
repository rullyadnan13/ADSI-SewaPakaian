<?php

    include "controller/controller.php";

    $cl = new controller();

    if (isset($_GET["buat"])) {
		$cl->view_daftar(); 
	} else {
        $cl->view_masuk();
    }
    
?>