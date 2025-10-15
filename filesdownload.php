<?php
include 'config.php';


                          

$sql = "SELECT * FROM pdf_data";
$jibu = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($jibu, MYSQLI_ASSOC);




if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM pdf_data WHERE id=$id";
    $jibu = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($jibu);
    $filepath = '../pdf/' . $file['filename'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../pdf/' . $file['filname']));
        readfile('../pdf/' . $file['filename']);

    }

}
?>