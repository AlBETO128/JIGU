<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $Contenido = $_POST['edit_Contenido'];
    $Via_de_admin = $_POST['edit_Via_de_admin'];
    $presentacion = $_POST['edit_presentacion'];
    $laboratorio = $_POST['edit_laboratorio'];
    $Precio = $_POST['edit_Precio'];


    // query
    $sql = "UPDATE medicamento SET nama='$nama', Contenido='$Contenido', Via_de_admin='$Via_de_admin', presentacion='$presentacion', laboratorio='$laboratorio', Precio='$Precio' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
