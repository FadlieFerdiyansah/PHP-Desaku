<?php
// import koneksi
error_reporting(0);
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
    <title>Document</title>
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

    <h1 class="font-bold text-center py-5 text-[30px]">Upload File</h1>
    <form action="" method="POST" class="mt-5" enctype="multipart/form-data">
        <div class="mx-[20%] space-y-[20px]">
            <input type="text" id="nama_desa" name="nama_desa" placeholder="Nama Desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="nama_laporan" name="nama_laporan" placeholder="Nama Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="status_laporan" name="status_laporan" placeholder="Status Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="pesan_laporan" name="pesan_laporan" placeholder="Pesan Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="file" id="file_laporan" name="file_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <button type="submit" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer">Upload</button>
            <a href="Home.php">
                <p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
            </a>
        </div>
    </form>

</body>

</html>

<?php
// upload file
if (isset($_POST['nama_desa'])) {
    $nama_desa = $_POST['nama_desa'];
    $nama_laporan = $_POST['nama_laporan'];
    $status_laporan = $_POST['status_laporan'];
    $pesan_laporan = $_POST['pesan_laporan'];
    $file_laporan = $_FILES['file_laporan']['name'];
    $file_laporan_tmp = $_FILES['file_laporan']['tmp_name'];
    $file_laporan_size = $_FILES['file_laporan']['size'];
    $file_laporan_type = $_FILES['file_laporan']['type'];
    $file_laporan_ext = explode('.', $file_laporan);
    $file_laporan_ext = strtolower(end($file_laporan_ext));
    $file_laporan_allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($file_laporan_ext, $file_laporan_allowed)) {
        if ($file_laporan_size < 1000000) {
            $file_laporan_new_name = uniqid('', true) . '.' . $file_laporan_ext;
            $file_laporan_destination = 'assets/file_laporan/' . $file_laporan_new_name;
            move_uploaded_file($file_laporan_tmp, $file_laporan_destination);
        } else {
            echo "<script>alert('File terlalu besar');</script>";
            echo "<script>window.location.href = 'Home.php';</script>";
        }
    }

    $query = "INSERT INTO laporans (user_id, nama_desa, nama_laporan, status_laporan, pesan_laporan, file_laporan) VALUES ('{$user['id']}','$nama_desa', '$nama_laporan', '$status_laporan', '$pesan_laporan', '$file_laporan_new_name')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('File berhasil diupload');</script>";
        echo "<script>window.location.href = 'Home.php';</script>";
    } else {
        echo "<script>alert('File gagal diupload');</script>";
        echo "<script>window.location.href = 'Home.php';</script>";
    }
}

?>