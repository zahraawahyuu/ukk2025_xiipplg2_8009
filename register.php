<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register To Do List</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-primary" style="color: white;"><h3 class="text-center font-weight-light my-4">Registasi</h3></div>
                                    <div class="card-body" style="background-color:gainsboro">
                                        <?php
                                        if(isset($_POST['register'])) {
                                            $username = $_POST['username'];
                                            $email = $_POST['email'];
                                            $name = $_POST['name'];
                                            $password = md5($_POST['password']); 
                                            
                                            $insert = mysqli_query($koneksi ,"INSERT INTO users(username,email,name,password) VALUES('$username','$email','$name','$password')");

                                            if($insert){
                                                echo '<script>alert("Selamat, Register Berhasil. Silahkan Login."); location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Register Gagal, Silahkan Ulangi Kembali");</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            </div>
                                            <div class="form-floating mb-5">
                                                <textarea name="username" rows="5" required class="form-control"></textarea>
                                                <label >Username</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" type="username" required name="email" placeholder="Masukkan Email" />
                                                <label >Email</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <textarea name="name" rows="5" required class="form-control"></textarea>
                                                <label >Name</label>
                                            </div>
                                            <div class="form-floating mb-5">
                                                <input class="form-control" id="inputPassword" required name="password" type="password" placeholder="Masukkan Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3 bg-secondary">
                                        <div class="small"><a href="register.html">
                                            &copy; TO DO LIST 2025 
                                        </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
