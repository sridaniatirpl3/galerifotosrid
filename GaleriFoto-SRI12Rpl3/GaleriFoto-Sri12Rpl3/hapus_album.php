<?php
    include "koneksi.php";
    session_start();

    $albumid=$_GET['albumid'];
    if(isset($_GET['confirm']) && $_GET['confirm'] == 'yes'){
    $sql=mysqli_query($conn,"delete from album where albumid='$albumid'");
    header("location:album.php");
    } else {
    echo '<script>
                var confirmDelete = confirm("Yakin akan menghapus album ini?");
                if(confirmDelete){
                    window.location.href = "hapus_album.php?albumid=' . $albumid . '&confirm=yes";
                } else {
                    window.location.href = "album.php";
                }
                </script>';
                 
    }
?>