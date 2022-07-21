<?php
  // import koneksi
  require_once 'koneksi.php';
  session_start();
  // if session set redirect to home
  if (isset($_SESSION['email'])) {
    header("Location: home.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LOGIN</title>
  </head>
  <body>
    <div class="relative flex">
      <img src="assets/Background.png" alt="" class="w-full h-[10px] min-h-screen" />
    </div>
    <div class="bg-white absolute top-0 w-[25%] px-[20px] min-h-screen pt-[18%]">
      <p class="text-center font-[700] text-[28px]">LOGIN</p>

      <form action="" method="POST" mt-5">
        <input type="email" placeholder="email"  name="email" id="email" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="password" name="password" id="password" placeholder="Password" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <a href="Register.php"><p class="text-center uppercase cursor-pointer font-[400] my-4 text-[#FF9F29] hover:font-[700] hover:underline">Buat Akun Baru</p></a>
        <button type="submit" class="bg-[#FF9F29] w-full p-2 mt-3 rounded-md text-white font-[700]">LOGIN</button>
      </form>
    </div>
  </body>
</html>

<?php
  // make login
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['email'] = $row['email'];
      header("Location: home.php");
    } else {
      echo "<script>alert('Email atau Password Salah')</script>";
    }
  }
?>