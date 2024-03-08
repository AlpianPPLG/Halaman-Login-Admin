<?php 

    // cek tombol sudah di tekan atau belum
    if( isset($_POST["submit"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if( empty($username) || empty($password) ) {
      $error = true;
      $pesan_error = "Username atau password tidak boleh kosong";
  }

    // cek username & password
    // if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, maka kembali(redirect) lagi ke halaman admin
    header("Location: admin.php");
    exit;
    
    // jika salah, tampilkan pesan salah
    
        // }
      } //else {
        //$error = true;
       //}
    // }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>

h1 {
  text-align: center;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}

form {
  margin: 0 auto;
  width: 300px;
}

form label {
  display: block;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

form input[type="text"],
form input[type="password"] {
  width: 100%;
  height: 40px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 16px;
  margin-bottom: 20px;
}

form button[type="submit"] {
  width: 100%;
  height: 40px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
}

form button[type="submit"]:hover {
  background-color: #3e8e41;
}

form p {
  font-size: 14px;
  color: red;
  margin-top: 10px;
}


    </style>
</head>
<body>
    

<h1>Halaman Login Admin</h1>

<?php if ( isset($error)) : ?>
    <p><?php echo $pesan_error; ?></p>
    <!-- <p style="color: red; font-style: italic;">username / password wrong!</p> -->
<?php endif; ?>

<!-- Jika Membuat Halaman Login Harus Menggunakan Method Post -->
<!-- Karena Jika Kita Menggunakan Method Get Maka Password Yang Dimasukkan User -->
<!-- Akan Terekspos Oleh Karena Method Get -->

<ul>
    <!-- Karena action dibuat menjadi kosong -->
    <!-- ketika kita menekan tombol login maka layar atau kolom url akan berkedip -->
    <!-- padahal sebenarnya data yang di masukkan itu di kembalikan -->
    <!-- tetapi karena kita menggunakan method post maka data tidak di tampilkan -->
<form action="" method="post">

<li>
    <label for="username"> Username : </label>
    <input type="text" name="username" id="username" required>
</li>

<li>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password" required>
</li>

<li>
    <button type="submit" name="submit">Login</button>
</li>

</form> 
</ul>

</body>
</html>