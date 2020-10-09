
<?php
    session_start();
    //echo 'ini adalah halaman profil  ' . $_COOKIES[nama_user];
    if (isser($_SESSION['nama_user'])){
    echo 'ini adalah halaman profil  '. $_SESSION['nama_user'];
    }
    else{
        echo 'login dulu';
    }
?>
<br>
<a href="logout.php">Logout</a>