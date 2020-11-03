<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
</head>
<body>
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
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </nav>
    <?php   
    include_once "koneksi.php"; 
    $status = 2;  
    if (isset($_POST['kode_hlmn'])) {
        
        $kode_hlmn = $_POST['kode_hlmn'];
        $judul_hlmn = $_POST['judul_hlmn'];
        $isi_hlmn = $_POST['isi_hlmn'];


         //buat koneksi
         $strSQL = "UPDATE halaman SET 
         judul_hlmn='".$judul_hlmn."', 
         isi_hlmn='".$isi_hlmn."'
         WHERE kode_hlmn='".$kode_hlmn."'";
        // echo $strSQL;
       // die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
           
         }  
        header("refresh:1; url=admin.php"); 
         
    }        
    else if (isset($_GET['kode_hlmn'])) {
        $kode_hlmn = $_GET['kode_hlmn'];
        $strSQL = "SELECT * FROM halaman WHERE kode_hlmn='".$kode_hlmn."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $judul_hlmn = $row["judul_hlmn"];
                $isi_hlmn = $row["isi_hlmn"];
            }
        }
        else {            
            $status = 3;
        }
    }  
    else {       
        $judul_hlmn = "";
        $isi_hlmn = "";
        $kode_hlmn = "";
    }  
    $disableForm = isset($_GET['kode_hlmn']) ? "enabled": "disabled";
    ?>

    <div class="container">
        <h2>Edit Halaman</h2>  
         
        <form id="myform" method="post" action="edit_admin.php">
            <div class="form-group">
                <label>Kode Halaman</label>
                <input id="kode_hlmn" class="form-control" type="text" name="kode_hlmn" value="<?php echo $kode_hlmn ?>" readonly 
                <?php echo $disableForm ?>>
            </div>
            <div class="form-group">
                <label>Judul Halaman</label>
                <input id="judul_hlmn" class="form-control" type="text" name="judul_hlmn" value="<?php echo $judul_hlmn ?>" <?php echo $disableForm ?>>
            </div>
  
            <div class="form-group">
                <label>Sub Isi Halaman</label>
                <input id="isi_hlmn" class="form-control" type="text" name="isi_hlmn" value="<?php echo $isi_hlmn ?>" <?php echo $disableForm ?>>
            </div>
                       
                <button type="submit" class="btn btn-success" value="simpan" id="tombol">Submit</button>
                <br>
        </form>
        
    </div>
    <br>
    <?php 
    include_once "footer.php";
    ?>


</body>
</html>