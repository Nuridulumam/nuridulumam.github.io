<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portal Naftex- Lupa Password</title>
    <?php include "include/head.php" ?>
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-2"><b>Lupa Password</b></h1>
                      <p class="mb-4">Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!</p>
                    </div>
                    <form class="user">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email Anda ..." />
                      </div>
                      <a href="login.html" class="btn btn-primary btn-user btn-block"> Reset Password </a>
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="small" href="register.html"><b>Register Akun Naftex</b></a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="login.html">Sudah punya akun? Masuk!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "include/script.php" ?>
    
  </body>
</html>
