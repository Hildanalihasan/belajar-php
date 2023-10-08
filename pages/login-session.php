<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css" />
</head>

<body>
    <div class="container">
        <img src="../assets/img/hildamn.png" alt="logo ku" />
        <hr /><br>
        <form method="POST" action="proses-login.php">
            <label for="username">Username : </label>

            <input type="text" class="form-control" placeholder="Masukkan Username" name="username" /><br /><br />

            <label for="password">Password : </label>

            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" /><br /><br />

            <small>Belum Punya Akun ?<a href="#" class="text-dark">
                    Buat Akun Anda !</a></small><br /> <br>

            <button class="reset" type="reset" name="reset">RESET</button>
            <button class="login" type="submit" name="login">LOGIN</button>
        </form>

        <br />
    </div>
</body>

</html>