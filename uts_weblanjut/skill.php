<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skill</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <?php 
        include_once "koneksi.php"; 
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
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Discover Me
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="portofolio.php">My Portofolio</a>
                <a class="dropdown-item" href="skill.php">My Skill</a>
                <a class="dropdown-item" href="experience.php">My Experience</a>
              </div>
            </li>
            <li class="nav-item">
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
                    $strSQL = "SELECT * FROM halaman where kode_hlmn='hal005'";
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
                <div class="row mb-3">   
                    <div class="col-md-6">
                        <p>Python</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                              40% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Machine Learning</p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                              50% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Deep Learning</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                              40% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Cyber Security</p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                              50% Menguasai
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Data analytics</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                              60% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Blockchain</p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                              50% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Web Development</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                              80% Menguasai
                            </div>
                          </div>
                          <br>
                          <p>Mobile App Development </p>
                          <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                              70% Menguasai
                            </div>
                        </div>
                    </div>                 
                </div>

                

              
            </div>

        </div>
    </div>
    <?php
        include_once "footer.php"; 
    ?>
</body>
</html>