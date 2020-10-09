<?php
    session_start();
        $user = 'hilman';
        $password = '123';

       if (isset($_POST['submit']) ){
           if ($_POST['nama']== $user && 
               $_POST['password']== $password){
               //echo 'login berhasil';
               
               //setcookie('nama_user', $_POST['nama'], time()+120);

               $_SESSION['nama_user']=$_POST['nama'];
               header('Location: profile3.php');
           }
       }
       else {
           echo 'login gagal';
       }
    
    ?>


    <form action="profile3.php" method="get">
        <input type="text" name="nama">
        <input type="password" name="pas">
        <input type="submit" name="submit">


    </form>
