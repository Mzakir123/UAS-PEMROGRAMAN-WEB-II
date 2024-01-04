<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Koperasi</title>
    <link href="gambar/uin.jpeg" rel="shortcut icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @keyframes coinAnimation {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('gambar/uin2.jpeg') fixed;
            background-size: cover;
            animation: coinAnimation 2s infinite; /* Sesuaikan durasi dan propertinya jika perlu */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            text-shadow: 2px 2px 4px #000000;
            padding: 20px;
            font-size: 24px;
        }

        .alert {
            background-color: #ff6347;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .kotak_login {
            width: 300px;
            background: #ffffff;
            margin: 80px auto;
            padding: 30px 20px;
            box-shadow: 0px 0px 10px 0px #000000;
            position: relative;
        }

        .tulisan_login {
            text-align: center;
            color: #4caf50;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .label {
            color: #4caf50;
        }

        .form_login {
            width: 100%;
            padding: 7px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .tombol_login {
            background: #4caf50;
            color: #ffffff;
            padding: 7px;
            font-size: 15px;
            border: 0;
            margin-top: 10px;
            cursor: pointer;
        }

        .tombol_login:hover {
            background: #45a049;
        }

        .link {
            color: #4caf50;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }

        .star {
            color: #ffd700;
            font-size: 30px;
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .kopma-logo {
            width: 250px;
            height: 130px;
            display: block;
            margin: 10px auto;
        }
        .tombol_register {
            text-align: center;
            margin-top: 10px;
        }

        .tombol_register a {
            color: #333;
            text-decoration: none;
        }

        .tombol_register a:hover {
            color: #3498db;
        }

    </style>
</head>
<body>

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <div class="kotak_login">
        <img src="gambar/kopma.jpeg" alt="Kopma Logo" class="kopma-logo">
        <p class="tulisan_login">Silahkan login</p>

        <form action="cek_login.php" method="post">
            <label class="label">Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

            <label class="label">Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

            <button type="submit" class="btn btn-primary btn-block tombol_login">LOGIN</button>
        </form>
        <div class="tombol_register">
            <p>Belum punya akun? <a href="register.php">Register</a></p>
        </div>
    </div>
</br>
</body>
</html>
