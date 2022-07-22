<?php
error_reporting(0);
require_once 'koneksi.php';
session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Profile User</title>
</head>

<body>
  <div class="bg-[#003865] flex items-center justify-between">
    <a href="Home.php">
      <h1 class="m-0 px-[20px] text-white font-bold text-[40px]">DESAKU</h1>
    </a>
    <div class="flex items-center px-[20px] space-x-[40px]">
      <span class="material-symbols-outlined text-white text-[30px] cursor-pointer">
        <a href="profileUser.php">
          account_circle
        </a>
      </span>
      <a href="./logout.php">
        <span class="material-symbols-outlined text-white text-[30px] cursor-pointer">
          power_settings_new
        </span>
      </a>
    </div>
  </div>
  <h1 class="font-bold text-center text-[38px]">Profile User</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="mx-[20%] space-y-[20px] mt-[40px]">
      <input type="email" id="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" disabled class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="password" id="password" name="password" placeholder="Password" value="<?= $user['password'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="text" id="nama_desa" name="nama_desa" placeholder="Nama Desa" value="<?= $user['nama_desa'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="text" id="nama_kades" name="nama_kades" placeholder="Nama Kades" value="<?= $user['nama_kades'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" value="<?= $user['provinsi'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="text" id="kabupaten" name="kabupaten" placeholder="Kabupaten" value="<?= $user['kabupaten'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?= $user['kecamatan'] ?>" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <input type="file" id="logo_desa" name="logo_desa" placeholder="Logo desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
      <?php if($user['logo_desa'] != '') : ?>
        <img src="assets/img/<?= $user['logo_desa'] ?>" alt="" width="100px" height="100px">
      <?php else: ?>
        <p class="text-red-500 text-sm">*Tidak ada logo</p>
      <?php endif; ?>
      <input type="submit" name="update" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer" value="Update"></input>
      <a href="Home.php">
        <p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
      </a>
    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['update'])) {
  if (isset($_FILES['logo_desa'])) {
    $file_name = $_FILES['logo_desa']['name'];
    $file_size = $_FILES['logo_desa']['size'];
    $file_tmp = $_FILES['logo_desa']['tmp_name'];
    $file_type = $_FILES['logo_desa']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['logo_desa']['name'])));
    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions)) {
      if ($file_size < 1000000) {
        $file_name_new = uniqid('', true) . '.' . $file_ext;
        $file_destination = 'assets/img/' . $file_name_new;
        move_uploaded_file($file_tmp, $file_destination);

        $query = "SELECT logo_desa FROM users WHERE id = '$user[id]'";
        $result = mysqli_query($conn, $query);
        $logo = mysqli_fetch_assoc($result);
        unlink("assets/img/" . $logo['logo_desa']);
      } else {
        echo "File size is too big!";
      }
    } else {
      echo "Invalid file format!";
    }

  }

  $password = $_POST['password'];
  $nama_desa = $_POST['nama_desa'];
  $nama_kades = $_POST['nama_kades'];
  $provinsi = $_POST['provinsi'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $query = "UPDATE users SET  password = '$password', nama_desa = '$nama_desa', nama_kades = '$nama_kades', provinsi = '$provinsi', kabupaten = '$kabupaten', kecamatan = '$kecamatan', logo_desa = '$file_name_new' WHERE id = '$user[id]'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo "<script>
    alert('Profile berhasil diupdate');
    document.location.href = '';
    </script>";
  } else {
    echo "<script>alert('Profile gagal diupdate');</script>";
  }
}
?>