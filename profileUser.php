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
    <span class="material-symbols-outlined text-white text-[30px] cursor-pointer">
    power_settings_new
    </span>
    </div>
</div>
<h1 class="font-bold text-center text-[38px]">Profile User</h1>
<div class="mx-[20%] space-y-[20px] mt-[40px]">
    <input type="email" id="email" name="email" placeholder="Email" class="border px-4 py-3 rounded-md py-1 w-[100%]"> 
    <input type="password" id="password" name="password" placeholder="Password" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="nama_desa" name="nama_desa" placeholder="Nama Desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="nama_kades" name="nama_kades" placeholder="Nama Kades" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="kabupaten" name="kabupaten" placeholder="Kabupaten" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="file" id="file_laporan" name="file_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <img src="" alt="">
<button type="submit" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer">Update</button>
<a href="Home.php">
<p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
</a>
</div>
</body>
</html>