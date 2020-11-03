<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <?php 
    include_once "koneksi.php"; 

    $status = 2;  
    if (isset($_POST['no_telp'])) {
        include_once "koneksi.php"; 
        $no_telp = $_POST['no_telp'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $keluhan = $_POST['keluhan']; 

         //buat koneksi
         $strsql = "INSERT INTO kontak (no_telp, nama, email, keluhan) 
         VALUES ('$no_telp','$nama','$email','$keluhan')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }            

   
    ?>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <img src="images/logo.png" class="float-left pr-6 pl-2 pb-3" width=120px> 
        <h1>Xander's Portofolio</h1>
        <p>Introducing My Self With Website</p> 
        <a href="https://instagram.com/alexndrmgw"><i class="fa fa-instagram fa-2x" style="color: black"></i></a>
        <a href="https://facebook.com"><i class="fa fa-facebook-official fa-2x" style="color: black"></i></a>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Discover Me
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="portofolio.php">My Portofolio</a>
                <a class="dropdown-item" href="skill.php">My Skill</a>
                <a class="dropdown-item" href="experience.php">My Detail</a>
              </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <?php
                    $strSQL = "SELECT * FROM halaman where kode_hlmn='hal002'";
                    $runStrSQL = mysqli_query($conn,$strSQL);
                    while ($hasil=mysqli_fetch_array($runStrSQL)){    
                ?>
                <h1><?php echo $hasil['judul_hlmn'] ?></h1>
                <br>
                    <?php echo $hasil['isi_hlmn'] ?>
                <br>
                <br>

                <?php
                }
                ?>
                
               <form method="post" action="contact.php">
                  
                  <div class="form-row">
                    <div class="col">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col">
                        <label for="email">E-Mail:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                  </div>  

                  <div class="form-group">
                    <br>  
                    <label for="no_telp">No HP/Telepon:</label>
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                  <div class="form-group">
                    <label for="keluhan">Keluhan dan Saran:</label>
                     <textarea class="form-control" rows="5" name="keluhan"></textarea>
                  </div>

                  <button type="submit" class="btn btn-success" value="simpan" id="simpan">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <?php
        include_once "footer.php"; 
    ?>
</body>
</html>