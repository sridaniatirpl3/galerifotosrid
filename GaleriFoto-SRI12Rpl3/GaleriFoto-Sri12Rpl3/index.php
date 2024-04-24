<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galeri Photo</title>
    <style>
        body {
            font-family: "Lucida Console";
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
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
            background-color: #660099;
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
            background-color: #CC3300;
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
    <h1>Galeri Foto</h1>
    
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
            <ul>
                <li><a href="register.php"><B>Register</B></a></li>
                <li><a href="login.php"><B>Login</B></a></li>
            </ul>
    <?php
        }else{
    ?>   
        
        <ul>
        <li><a>Selamat datang <b><?=$_SESSION['namalengkap']?></b></a><li>
        </ul>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
    <?php
        }
    ?>

    <p></p>

    <table width="100%" border="1" cellpadding="5" cellspacing="0">
 
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Lihat Komentar</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"SELECT * FROM foto,user WHERE foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['fotoid']?></td>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td>
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td><?=$data['namalengkap']?></td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"SELECT * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                    <a href="lihatkomentar.php?fotoid=<?=$data['fotoid']?>">Lihat Komentar</a>
                </td>
                <td>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                </td>
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