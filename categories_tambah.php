<?php
if(isset($_POST['category'])) {
    $category= $_POST['category'];
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];

   $query = mysqli_query($koneksi, "INSERT INTO categories(id,category,user_id) values('$id','$category','$user_id')");

    if($query) {
        echo '<script>alert("Tambah Data Berhasil")</script>';
    }else{
        echo '<script>alert("Tambah Data Gagal")</script>';
    }
}

?>

<div class="container-fluid">
                        <h1 class="mt-4">categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">categories</li>
                        </ol>
                        
                        <a href="?page=categories" class="btn btn-danger">kembali</a>
                        <hr>

                        <form method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td width="200">id</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="id"></td>
                            </tr>

                            <tr>
                                <td>Categories</td>
                                <td>:</td>
                                <td>
                                    <textarea name="category" rows="5" class="form-control"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>user_id</td>
                                <td>:</td>
                                <td><input class="form-control" type="number" name="user_id"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </td>
                            </tr>
                        </table>
                    </form>
  </div>