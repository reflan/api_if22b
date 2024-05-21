<?php
include "../connection.php";

$npm          = $_POST['text_npm'];
$nama         = $_POST['text_nama'];
$alamat       = $_POST['text_alamat'];

// isi query update
$sql = "UPDATE mahasiswa 
        SET 
            nama = '$nama'
            , alamat = '$alamat'
        WHERE
            npm = '$npm'";

$result = $connect->query($sql);
echo json_encode(array(
    "success" => $result
));
