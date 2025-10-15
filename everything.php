<?php


if (isset($_GET['page_id'])) {
    $id = $_GET['page_id'];

    if ($id= ['about']) {
        header("location:about.php");
     
    }

}
?>