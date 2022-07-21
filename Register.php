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
    <div class="bg-white absolute top-0 w-[25%] px-[20px] min-h-screen pt-[10%]">
      <p class="text-center font-[700] text-[28px]">PENDAFTARAN</p>
      <form action="" method="POST" class="mt-5">
        <input type="email"  placeholder="Email" name="email" id="email" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="password"  placeholder="Password" name="password" id="password" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="text" placeholder="Nama Desa" name="nama_desa" id="nama_desa" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="text"  placeholder="Nama Kades" name="nama_kades" id="nama_kades" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="text" placeholder="Provinsi" name="provinsi" id="provinsi" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="text" placeholder="Kabupaten" name="kabupaten" id="kabupaten" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="text" placeholder="Kecamatan" name="kecamatan" id="kecamatan" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <input type="file" placeholder="Logo" name="logo_desa" id="logo_desa" class="w-full rounded-lg my-2 px-2 py-2 border border-[#2C3639]" />
        <button type="submit" class="bg-[#FF9F29] w-full p-2 mt-3 rounded-md text-white font-[700]">PENDAFTARAN</button>
        <a href="index.html">
          <p class="border text-center hover:bg-[#FF9F29] text-[#FF9F29] hover:text-white border-[#FF9F29] w-full p-2 mt-3 rounded-md font-[700]">LOGIN</p>
        </a>
      </form>
    </div>
  </body>
</html>
