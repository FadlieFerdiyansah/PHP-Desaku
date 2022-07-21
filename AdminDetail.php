<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Admin Dashboard</title>
</head>
<body>
<div class="bg-[#003865] flex items-center justify-between">
    <h1 class="m-0 px-[20px] text-white font-bold text-[40px]">DESAKU</h1>
    <div class="flex items-center px-[20px] space-x-[40px]">
    <span class="material-symbols-outlined text-white text-[30px] cursor-pointer">
    power_settings_new
    </span>
    </div>
</div>
<div class="grid grid-cols-12 gap-4 w-full">
<div class="bg-[#003865] col-start-1 col-end-3 h-screen min-h-full">
    <div class="border border-white">
    <a href="AdminDashboard.php">
        <p class="font-bold text-white text-left px-[20px] py-[10%] cursor-pointer">Data User</p>
    </a>
    </div>
    <div class="border border-white">
<a href="AdminLaporan.php">
<p class="font-bold text-white text-left px-[20px] py-[10%] cursor-pointer">Data Laporan</p>
</a>
    </div>
</div>
<div class="col-start-4 col-end-12">
    <div class="my-10">
    <p class="font-bold text-center text-[30px] ">Detail Laporan</p>
    </div>
    <div class="mx-[20%] space-y-[20px]">
    <input type="text" id="nama_desa" name="nama_desa" placeholder="Nama Desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="nama_laporan" name="nama_laporan" placeholder="Nama Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="status_laporan" name="status_laporan" placeholder="Status Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="pesan_laporan" name="pesan_laporan" placeholder="Pesan Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="file" id="file_laporan" name="file_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="file" id="sk_laporan" name="sk_laporan" placeholder="SK Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
<button type="submit" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer">Upload</button>
<a href="AdminLaporan.php">
<p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
</a>
</div>
</div>
</div>
</body>
</html>