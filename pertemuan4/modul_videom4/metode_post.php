
    <?php
       if (isset($_POST['submit']) ){
           echo $_POST['password'];
       }
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Post</title>

    <form action="profile.php" method="get">
        <input type="text" name="nama">
        <input type="password" name="pas">
        <input type="submit" name="submit">


    </form>
