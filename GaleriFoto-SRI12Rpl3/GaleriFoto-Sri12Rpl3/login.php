<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="" >
    <title>Halaman Login</title>
    <style>
        /* Global Reset */
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0;
            padding: 0;
        }

        /* Body Styles */
        body {
            font-family: "Lucida Console";
            background-color: #f4f4f4;
            color: #333;
        }

        /* Container Styles */
        .container {
            max-width: 3000px;
            margin: 0 auto;
            padding: 100px;
            background-color: #f4f4f4;
            
        }

        /* Header Styles */
        h1 {
            text-align: center;
            margin-bottom: 80px;
            color: #CC3300;
        }

        /* Form Styles */
        form {
            margin-top: 50px;
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
            text-align:
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 50%;
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
            text-align: center;
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
                font-size: 20px;
            }
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="card card-login mx-auto mt-5 col-md-6">
          <div class="card-header"><i class="fa fa-user"></i></div>
          <div class="card-body">
            <div class="message">
<body>
    <h1>HALAMAN LOGIN</h1>
    <form action="proses_login.php" method="post">
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
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
<body>
    <form action="index.php">
        <table>
            <tr>
                <td><button type="home" value="Home">Home</td>
            </tr>
        </table>
    </form>
    
</body>
</html>