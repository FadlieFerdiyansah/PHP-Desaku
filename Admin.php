<?php
  // import koneksi
  require_once 'koneksi.php';
  session_start();
  // if session set redirect to home
  if (isset($_SESSION['username'])) {
    header("Location: admindashboard.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ADMIN</title>
  </head>
  <body>
    <div class="relative flex">
      <img src="assets/BackgroundAdmin.png" alt="" class="w-full h-[10px] min-h-screen" />
    </div>
    <div class="bg-white absolute top-0 w-[25%] px-[20px] min-h-screen pt-[17%]">
      <p class="text-center font-[700] text-[28px]">LOGIN ADMIN</p>
      <form action="" method="POST" class="mt-5">
        <input type="username" placeholder="username" id="username" name="username" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="password" placeholder="password" id="password" name="password" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <button type="submit" class="bg-[#243A73] w-full p-2 mt-3 rounded-md text-white font-[700]">LOGIN</button>
      </form>
    </div>
  </body>
</html>
<?php
  // make login
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) { 
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: admindashboard.php");
    } else {
      echo "<script>alert('Username atau Password Salah')</script>";
    }
  }
?>