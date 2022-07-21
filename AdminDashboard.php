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
    <p class="font-bold text-center text-[30px] ">Data User</p>
    </div>
    <div class="border rounded">
    <table class="text-left w-full">
  <tr class="border-b">
    <th class="p-3">Nama Desa</th>
    <th class="p-3">Nama Kades</th>
    <th class="p-3">Provinsi</th>
    <th class="p-3">Kabupaten</th>
    <th class="p-3">Kecamatan</th>
    <th class="p-3">Logo Desa</th>
  </tr>
  <tr>
    <td class="p-3">Alfreds Futterkiste</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

</table>
    </div>
</div>
</div>
</body>
</html>