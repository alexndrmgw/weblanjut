    <?php
        $user = 'hilman';
        $password = '123';

       if (isset($_POST['submit']) ){
           if ($_POST['nama']== $user && 
               $_POST['password']== $password){
               //echo 'login berhasil';
               header('Location: profile.php?nama=' . $user);
           }
       }
       else {
           echo 'login gagal';
       }
    
    ?>


    <form action="profile.php" method="get">
        <input type="text" name="nama">
        <input type="password" name="pas">
        <input type="submit" name="submit">


    </form>
