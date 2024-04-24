<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        /* Global Reset */
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0 auto;
            padding: 50px;
        }

        /* Body Styles */
        body {
            font-family: "Lucida Console";
            background-color: F4F4F4;
            color: #333;
        }

        /* Container Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #CC3300;
        }

        /* Form Styles */
        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 45%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 8px
        }

        input[type="submit"] {
            background-color: #CC3300;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FF6633;
        }

        button[type="home"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 8px
        }

        button[type="home"] {
            background-color: #CC3300;
            color: #fff;
            cursor: pointer;
        }

        button[type="home"]:hover {
            background-color: #FF6633;
        }
        /* Responsive Styles */
        @media (max-width: 600px) {
            ul li {
                display: block;
                margin-bottom: 10px;
            }

            table {
                font-size: 14px;
            }
        }
        
    </style>
</head>
<body>
    <h1>HALAMAN REGISTRASI</h1>
    <form action="proses_register.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
    <form action="index.php">
        <table>
            <tr>
                <td><button type="home" value="Home">Home</td>
            </tr>
        </table>
    </form>
</body>
</html>