<?php
// import koneksi
error_reporting(0);
require_once 'koneksi.php';
session_start();
// if session set redirect to home
if (!isset($_SESSION['username'])) {
    header("Location: admin.php");
}
$query = "SELECT * FROM laporans WHERE id = '$_GET[id]'";
$result = mysqli_query($conn, $query);
$laporan = mysqli_fetch_assoc($result);
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


    <h1 class="font-bold text-center py-5 text-[30px]">Edit File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mx-[20%] space-y-[20px]">
            <input type="text" id="nama_desa" name="nama_desa" value="<?= $laporan['nama_desa'] ?>" placeholder="Nama Desa" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="nama_laporan" name="nama_laporan" value="<?= $laporan['nama_laporan'] ?>" placeholder="Nama Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="status_laporan" name="status_laporan" value="<?= $laporan['status_laporan'] ?>" placeholder="Status Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <input type="text" id="pesan_laporan" name="pesan_laporan" value="<?= $laporan['Pesan_laporan'] ?>" placeholder="Pesan Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <p>File Laporan <a <?php if ($laporan['file_laporan'] != '') : ?> href="assets/file_laporan/<?= $laporan['file_laporan'] ?>" <?php endif; ?> download class="text-red-500 text-sm">File : <?= $laporan['file_laporan'] != '' ? $laporan['file_laporan'] : 'File tidak ada' ?></a></p>
            <input type="file" id="file_laporan" name="file_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <p>Surat Sk <a <?php if ($laporan['sk_laporan'] != '') : ?> href="assets/sk_file/<?= $laporan['sk_laporan'] ?>" <?php endif; ?> download class="text-red-500 text-sm">File : <?= $laporan['sk_laporan'] != '' ? $laporan['sk_laporan'] : 'File tidak ada' ?></a></p>
            <input type="file" id="sk_laporan" name="sk_laporan" placeholder="File Laporan" class="border px-4 py-3 rounded-md py-1 w-[100%]">
            <button type="submit" class="bg-[#003865] w-full rounded text-white font-bold p-3 cursor-pointer">Upload</button>
            <a href="AdminLaporan.php">
                <p class="border-[#003865] border w-full rounded text-[#003865] font-bold p-3 my-5 text-center cursor-pointer">Back</p>
            </a>
        </div>
    </form>

</body>

</html>

<?php
if (isset($_POST['nama_desa'])) {
    if (isset($_FILES['file_laporan']) && $_FILES['file_laporan']['error'] == 0) {
        $file_tmp = $_FILES['file_laporan']['tmp_name'];
        $file_type = $_FILES['file_laporan']['type'];
        $file_size = $_FILES['file_laporan']['size'];
        $file_ext = strtolower(end(explode('.', $_FILES['file_laporan']['name'])));
        $file_name = uniqid('', true) . '.' . $file_ext;
        $extensions = array("pdf");
        if (in_array($file_ext, $extensions)) {
            move_uploaded_file($file_tmp, "assets/file_laporan/$file_name");
        } else {
            echo "File type not allowed";
        }

        $query = "SELECT file_laporan FROM laporans WHERE id = '$_GET[id]'";
        $result = mysqli_query($conn, $query);
        $laporan = mysqli_fetch_assoc($result);
        unlink("assets/file_laporan/" . $laporan['file_laporan']);
    } else {
        $file_name = $laporan['file_laporan'];
    }

    if (isset($_FILES['sk_laporan']) && $_FILES['sk_laporan']['error'] == 0) {
        $file_tmp = $_FILES['sk_laporan']['tmp_name'];
        $file_type = $_FILES['sk_laporan']['type'];
        $file_size = $_FILES['sk_laporan']['size'];
        $file_ext = strtolower(end(explode('.', $_FILES['sk_laporan']['name'])));
        $sk_name = uniqid('', true) . '.' . $file_ext;
        $extensions = array("pdf");
        if (in_array($file_ext, $extensions)) {
            move_uploaded_file($file_tmp, "assets/sk_file/$sk_name");
        } else {
            echo "File type not allowed";
        }

        $query = "SELECT sk_laporan FROM laporans WHERE id = '$_GET[id]'";
        $result = mysqli_query($conn, $query);
        $laporan = mysqli_fetch_assoc($result);
        unlink("assets/sk_file/" . $laporan['sk_laporan']);
    } else {
        $sk_name = $laporan['sk_laporan'];
    }

    $query = "UPDATE laporans SET nama_desa = '$_POST[nama_desa]', nama_laporan = '$_POST[nama_laporan]', status_laporan = '$_POST[status_laporan]', Pesan_laporan = '$_POST[pesan_laporan]', file_laporan = '$file_name', sk_laporan = '$sk_name' WHERE id = '$_GET[id]'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
            alert('Data Laporan Berhasil Diubah');
            window.location.href='';
            </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>