    <div class="site-blocks-cover inner-page" style="background-image: url('images/ad.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html"></a> <span class="mx-2 mb-0"></span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Administrator</h2>
          </div>
          <div class="col-md-7">

            <form action="?page=login&login=true" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="nama" class="text-black">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="pass" class="text-black">Password</label>
                    <input type="Password" class="form-control" id="pass" name="pass">
                  </div>
                
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                  </div>
                </div>
              </div>
            </form>
            <?php
            if(@$_GET['login']){
              $l_user = $_POST['nama'];
              $l_pass = md5($_POST['pass']);
              include_once 'koneksi.php';
              $query = "SELECT * FROM admin WHERE user='$l_user' AND pass='$l_pass'";
              $sql = mysqli_query($conn,$query);
              $row = mysqli_num_rows($sql);
              if($row == 1){
                $_SESSION['login'] = true;
                $_SESSION['nama_login'] = "Administrator";
                echo "<script>alert('Login berhasil');</script>";
                echo "<script>window.location.replace('?page=dashboard');</script>";
              } else {
                echo "<script>alert('Login gagal');</script>";                
                echo "<script>window.location.replace('?page=login');</script>";                
              }
            }
          ?>
          </div>
          
          </div>
        </div>
      </div>