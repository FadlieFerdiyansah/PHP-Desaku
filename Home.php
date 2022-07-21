<?php
  // import koneksi
  require_once 'koneksi.php';
  session_start();
  // check session
  if (!isset($_SESSION['email'])) {
    header("Location: index.php");
  }

  // if session is set show data user login
  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
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
    <title>Home</title>
</head>
<body>

<!-- NAVBAR -->
<div class="bg-[#003865] flex items-center justify-between">
    <h1 class="m-0 px-[20px] text-white font-bold text-[40px]">DESAKU</h1>
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
<!-- NAVBAR -->

<div class="relative">
        <img src="assets/Maskgroup.png" alt="" />
        <div class="absolute top-[30%] left-[43%]">
          <p class="font-[700] text-white text-[48px] text-center">
            FORUM <br /> DESA <br> <?= $row['nama_desa'] ?>
          </p>
        </div>
      </div>
      <div class="py-10">
        <p class="font-[700] text-[28px] text-center uppercase">Upload Hukum Desa</p>
        <a href="UploadUser.php">
        <button  class=" ml-[44%] mt-4 mb-2 bg-[#FF9F29] py-4 px-10 font-[700] text-white rounded-lg">
          Upload File Desa
        </button>
        </a>
      </div>

      <div class="border mx-10 rounded-md ">
      <table class="text-left w-full">
  <tr class="border-b">
    <th class="p-3">Nama Laporan</th>
    <th class="p-3">Status Laporan</th>
    <th class="p-3">Pesan Laporan</th>
    <th class="p-3">File Laporan</th>
    <th class="p-3">SK Laporan</th>
    <th class="p-3">Action</th>
  </tr>
  <tr>
    <td class="p-3">Alfreds Futterkiste</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="p-3 flex items-center space-x-3">
    <span class="material-symbols-outlined cursor-pointer">
    file_download
    </span>
    <span class="material-symbols-outlined cursor-pointer">
    search
    </span>
    </td>     
  </tr>

</table>
</div>
</body>
</html>