
    
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
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form action="?page=contact&submit=true" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="nama" class="text-black"> Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" required="">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="alamat" class="text-black">Alamat <span class="text-danger">*</span></label>
                    <input type="input" class="form-control" id="alamat" name="alamat" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="saran" class="text-black">Saran & kritik </label>
                    <textarea name="saran" id="saran" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Kirim">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <?php 
            if(@$_GET['submit']){
              $nama = $_POST['nama'];
              $alamat = $_POST['alamat'];
              $email = $_POST['email'];
              $saran = $_POST['saran'];
              include_once 'koneksi.php';
              $query = "INSERT INTO saran(nama,alamat,email,saran) VALUES('$nama','$alamat','$email','$saran')";
              $sql = mysqli_query($conn,$query);
              echo "<script>alert('Saran berhasil diinput');</script>";
              echo "<script>window.location.replace('?page=contact');</script>";
            }
          ?>
          </div>
        </div>
      </div>