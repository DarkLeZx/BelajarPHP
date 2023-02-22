<?php
    // Membuat Variabel
    $nama_depan = "Kang";
    $NamaDepan="Kang";
    $NamaBelakang ="Asep";
    $Umur = 17;
    $ipk = 3.98; // float/double
    $hadir = false; // Boolean
    $sallary = null;

    // echo "NamaLengkap : ",$NamaDepan," ",$NamaBelakang ;
    // echo "Nama Lengkap :  $NamaDepan $NamaBelakang" ;
    echo "Nama Lengkap : ${NamaDepan} ${NamaBelakang}";
    echo "<br/>";
    echo "Umur : ${Umur} Tahun";
    $Umur = 22; 
    echo "<br/>";
    echo "Umur Sekarang : ${Umur} Tahun";
    unset ($Umur); //Menghapus Variabel dinamis
    //Static Variabel (Define)
    define("TEMPATLAHIR" , "PALEMBANG");
    echo "<br/>";
    echo "Tempat Lahir :" .TEMPATLAHIR;

    // Variabel Global
    /*
    1. Session --> $_SESSION ['nama'];
    2. Cookie --> $_COOKIE ['namaCookie'];
    3. Post --> $_POST ['npm'];
    4. Get --> $_GET ['npm'];
    5. Server --> $_SERVER [];

    */
    
?>