<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>


<h1 class="font-bold text-center py-5 text-[30px]">Edit File</h1>
<div class="mx-[20%] space-y-[20px]">
<input type="text" id="nama_desa" name="nama_desa" placeholder="Nama Desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="nama_laporan" name="nama_laporan" placeholder="Nama Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="status_laporan" name="status_laporan" placeholder="Status Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <input type="text" id="pesan_laporan" name="pesan_laporan" placeholder="Pesan Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <p>File Laporan</p>
    <input type="file" id="file_laporan" name="file_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
    <p>Surat Sk</p>
    <input type="file" id="sk_laporan" name="sk_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
<button type="submit" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer">Upload</button>
<a href="AdminLaporan.php">
<p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
</a>
</div>

</body>
</html>