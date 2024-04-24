<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Komentar</title>
    <style>
        body {
            font-family: "Lucida Console";
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            display: block;
            font: 3em Lucida;
            font-weight: bold;
            margin: 0;
            padding: 0;
            color: white;
            background-color: #660099;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #660099
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #9966FF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 4px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #9933FF;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            border-radius: 6px;
        }

        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #660099;
   color: white;
   text-align: center;
}
    </style>
</head>
<body>
    <h1>Hallo Selamat Datang <b><?=$_SESSION['namalengkap']?></b></h1>
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <table width="100%" border="1" cellpadding=5 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $fotoid = $_GET ['fotoid'];
            $sql=mysqli_query($conn,"SELECT * from komentarfoto INNER JOIN user ON komentarfoto.userid = user.userid where komentarfoto.fotoid=$fotoid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['komentarid']?></td>
                <td><?=$data['namalengkap']?></td>
                <td><?=$data['isikomentar']?></td>
                <td><?=$data['tanggalkomentar']?></td>
            </tr>
        <?php
            }
        ?>
    </table>

    <div class="footer">
  <p>| &copy; Galeri Foto</p>
</div>
</body>
</html>