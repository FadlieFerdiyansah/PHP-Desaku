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
  $user = mysqli_fetch_assoc($result);
  // get all laporan based on user id
  $query2 = "SELECT * FROM laporans WHERE user_id = '$user[id]'";

  $resultReports = mysqli_query($conn, $query2);
  $reports = mysqli_fetch_all($resultReports, MYSQLI_ASSOC);
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
        FORUM <br /> DESA
      </p>
    </div>
  </div>
  <div class="py-10">
    <p class="font-[700] text-[28px] text-center uppercase">Upload Hukum Desa</p>
    <a href="UploadUser.php">
      <button class=" ml-[44%] mt-4 mb-2 bg-[#FF9F29] py-4 px-10 font-[700] text-white rounded-lg">
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

      <?php foreach ($reports as $report) : ?>
        <tr class="border-b">
          <td class="p-3"><?= $report['nama_laporan'] ?></td>
          <td class="p-3"><?= $report['status_laporan'] ?></td>
          <td class="p-3"><?= $report['Pesan_laporan'] ?></td>
          <td class="p-3"><?= $report['file_laporan'] ?></td>
          <td class="p-3"><?= $report['sk_laporan'] ?></td>
          <td class="p-3 flex items-center space-x-3">
            <?php if ($report['file_laporan']) : ?>
              <a href="assets/file_laporan/<?= $report['file_laporan'] ?>" download class="material-symbols-outlined cursor-pointer">
                Download
              </a>
            <?php endif; ?>

            <!-- <span class="material-symbols-outlined cursor-pointer">
              search
            </span> -->
          </td>
        </tr>
      <?php endforeach; ?>


    </table>
  </div>
</body>

</html>